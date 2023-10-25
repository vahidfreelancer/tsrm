<?php

use App\Http\Controllers\ProfileController;
use App\Models\SoftwareRelease;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
function convert_filesize($bytes, $decimals = 1){
    $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $allrelease=SoftwareRelease::All();
    return view('dashboard',['releaselist'=>$allrelease]);

})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('releases/download/{filename}', function (Request $request,$filename) {
    $rel=SoftwareRelease::where('id',$filename)->first();
    $rel->no_of_downloads=$rel->no_of_downloads+1;
    $rel->save();
    return Storage::download($rel->filename);
})->middleware(['auth', 'verified'])->name('downloadpath');

Route::get('/issuereport', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('bugreport');

Route::get('/updates', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('news');

Route::get('/admin/managerelease', function () {
    return view('releasemanager');
})->middleware(['auth', 'verified'])->name('admin.releasemanager');
// 'no_of_downloads',
// 'file_size',
// 'userid',
// 'status',
// 'type',
// 'releasedate',
// 'builddate',
// 'filename',
// 'format',
// 'md5',
// 'name',
// 'detils',
// 'improvements',
// 'version',
// 'device',
// 'comment',
Route::post('/admin/newrelease', function (Request $request ) {
    $name=$request->name;
    $publisher=$request->publisher;
    $version=$request->version;
    $target=$request->target;
    $improvements=$request->improvements;
    $detail=$request->detail;
    $builddate=$request->builddate;
    $comment=$request->comment;
    $release=new SoftwareRelease;
    $path = $request->releasefile->storeAs('.',$request->releasefile->getClientOriginalName());
    $release->name=$name;
    $release->file_size=$request->releasefile->getSize();
    $release->userid=$request->user()->id;
    $release->status=1;
    $release->type=1;
    $release->builddate=$builddate;
    $release->filename=$request->releasefile->getClientOriginalName();
    $release->format=$request->releasefile->extension();
    $release->md5=md5('../../storage/app/'.$path);
    $release->detils=$detail;
    $release->improvements=$improvements;
    $release->version=$version;
    $release->device=$target;
    $release->comment=$comment;
    $release->save();
    $allrelease=SoftwareRelease::All();
    return view('releasemanager',['releaselist'=>$allrelease]);
})->middleware(['auth', 'verified'])->name('admin.newrelease');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
