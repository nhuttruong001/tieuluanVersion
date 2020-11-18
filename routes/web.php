<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//trang chu
Route::get('/home','IndexController@getIndex')->name('trangchu');



//cart

Route::get('/cart','IndexController@getCart')->name('cart');

//details

Route::get('/details/{id}','IndexController@getDetails')->name('details');


//search

Route::get('/search','IndexController@getSearch')->name('search');

//category

Route::get('/category','IndexController@getCategory')->name('category');

//complete

Route::get('/complete','IndexController@getComplete')->name('complete');

//email

Route::get('/email','IndexController@getEmail')->name('email');

//singup

Route::get('/signup','IndexController@getSignup')->name('signup');

//login

Route::get('/login','AuthController@getLogin')->name('formlogin');
Route::post('/login-xl','AuthController@postLogin')->name('login');


//login1
Route::get('/login1','AuthController@getLogin')->name('formlogin1');
Route::post('/login1-xl','AuthController@postLogin')->name('login1');






Route::group(['prefix' => 'admin'],function(){
    Route::get('/admin', function () {
        return view('admin.layout.master');
    })->name('admin');

    Route::group(['prefix' => 'User'],function(){
    //     #Danh sach Admin
    //     Route::get('/Admin_DS','AdminController@getDanhSach')->name('Admin_DS');
    //     //Form Thêm Admin
    //     Route::get('/Admin_FormThem', 'AdminController@getThem')->name('Admin_Them');
    //     Route::post('/Admin_ThemAdmin', 'AdminController@postThem')->name('Admin_XLThem');

    //     //xoa Admin
    //     Route::get('/Admin_Xoa/{id}', 'AdminController@getXoa')->name('Admin_Xoa');

    //     // tim kiem admin
    //     Route::get('/Admin_Timkiem', 'AdminController@postTimkiem')->name('Admin_Timkiem');
    // });

    // Route::group(['prefix' => 'NhanVien'],function(){
    //     #Danh sach NhanVien
    //     Route::get('/NhanVien_DS','NhanVienController@getDanhSach')->name('NhanVien_DS');
    //     //Form Thêm NhanVien
    //     Route::get('/NhanVien_FormThem', 'NhanVienController@getThem')->name('NhanVien_Them');
    //     Route::post('/NhanVien_ThemNhanVien', 'NhanVienController@postThem')->name('NhanVien_XLThem');

    //     //From sua Nhan Vien
    //     Route::get('/NhanVien_FormSua/{id}', 'NhanVienController@getSua')->name('NhanVien_Sua');
    //     Route::post('/NhanVien_SuaNhanVien/{id}', 'NhanVienController@postSua')->name('NhanVien_XLSua');

    //     //xoa Nhan Vien
    //     Route::get('/NhanVien_Xoa/{id}', 'NhanVienController@getXoa')->name('NhanVien_Xoa');
    //     //Tim kiem nhan vien
    //     Route::get('/NhanVien_Timkiem', 'NhanVienController@postTimkiem')->name('NhanVien_Timkiem');

  //     #Danh sach Admin
        Route::get('/User_DS','UserController@getDanhSach')->name('User_DS');
    //     //Form Thêm Admin
    //     Route::get('/Admin_FormThem', 'AdminController@getThem')->name('Admin_Them');
    //     Route::post('/Admin_ThemAdmin', 'AdminController@postThem')->name('Admin_XLThem');

    //     //xoa Admin
    //     Route::get('/Admin_Xoa/{id}', 'AdminController@getXoa')->name('Admin_Xoa');



    });


    Route::group(['prefix' => 'LoaiGiay'],function(){
        // #Danh sach LoaiGiay
        Route::get('/LoaiGiay_DS','LoaiGiayController@getDanhSach')->name('LoaiGiay_DS');
        //Form Thêm LoaiGiay
        Route::get('/LoaiGiay_FormThem', 'LoaiGiayController@getThem')->name('LoaiGiay_Them');
        Route::post('/LoaiGiay_ThemLoaiGiay', 'LoaiGiayController@postThem')->name('LoaiGiay_XLThem');

        //From sua Loại Giày
        Route::get('/LoaiGiay_FormSua/{id}', 'LoaiGiayController@getSua')->name('LoaiGiay_Sua');
        Route::post('/LoaiGiay_SuaLoaiGiay/{id}', 'LoaiGiayController@postSua')->name('LoaiGiay_XLSua');

        //xoa loai giay
        Route::get('/LoaiGiay_Xoa/{id}', 'LoaiGiayController@getXoa')->name('LoaiGiay_Xoa');
    });

    Route::group(['prefix' => 'Giay'],function(){
        // #Danh sach giay
        Route::get('/Giay_DS','GiayController@getDanhSach')->name('Giay_DS');
        //Form Thêm Giay
        Route::get('/Giay_FormThem', 'GiayController@getThem')->name('Giay_Them');
        Route::post('/Giay_ThemGiay', 'GiayController@postThem')->name('Giay_XLThem');

        // //From sua giay
        Route::get('/Giay_FormSua/{id}', 'GiayController@getSua')->name('Giay_Sua');
        Route::post('/Giay_SuaGiay/{id}', 'GiayController@postSua')->name('Giay_XLSua');

        //xoa Nhan Vien
        Route::get('/Giay_Xoa/{id}', 'GiayController@getXoa')->name('Giay_Xoa');
    });


   

    Route::group(['prefix' => 'KhuyenMai'],function(){
        // #Danh sach Khuyen Mai
        Route::get('/KhuyenMai_DS','KhuyenMaiController@getDanhSach')->name('KhuyenMai_DS');
        //Form Thêm Khuyen mai
        Route::get('/KhuyenMai_FormThem', 'KhuyenMaiController@getThem')->name('KhuyenMai_Them');
        Route::post('/KhuyenMai_ThemKhuyenMai', 'KhuyenMaiController@postThem')->name('KhuyenMai_XLThem');

        //From sua Khuyen mai
        Route::get('/KhuyenMai_FormSua/{id}', 'KhuyenMaiController@getSua')->name('KhuyenMai_Sua');
        Route::post('/KhuyenMai_SuaKhuyenMai/{id}', 'KhuyenMaiController@postSua')->name('KhuyenMai_XLSua');

        //xoa Khuyen mai
        Route::get('/KhuyenMai_Xoa/{id}', 'KhuyenMaiController@getXoa')->name('KhuyenMai_Xoa');
    });

    Route::group(['prefix' => 'NhaCungCap'],function(){
        // #Danh sach Nha cung cap
        Route::get('/NhaCungCap_DS','NhaCungCapController@getDanhSach')->name('NhaCungCap_DS');
        //Form Thêm Nha cuNg cap
        Route::get('/NhaCungCap_FormThem', 'NhaCungCapController@getThem')->name('NhaCungCap_Them');
        Route::post('/NhaCungCap_ThemNhanVien', 'NhaCungCapController@postThem')->name('NhaCungCap_XLThem');

        //From sua Nha Cung Cap
        Route::get('/NhaCungCap_FormSua/{id}', 'NhaCungCapController@getSua')->name('NhaCungCap_Sua');
        Route::post('/NhaCungCap_SuaNhaCungCap/{id}', 'NhaCungCapController@postSua')->name('NhaCungCap_XLSua');

        //xoa Nha Cung Cap
        Route::get('/NhaCungCap_Xoa/{id}', 'NhaCungCapController@getXoa')->name('NhaCungCap_Xoa');
    });


    

});



