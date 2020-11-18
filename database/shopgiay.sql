/*==============================================================*/
/* DBMS name:      Sybase SQL Anywhere 12                       */
/* Created on:     9/20/2020 7:53:45 PM                         */
/*==============================================================*/


/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create table ADMIN 
(
   AD_ID                integer                        not null,
   AD_USERNAME          varchar(50)                    null,
   AD_PASSWORD          varchar(50)                    null,
   AD_TRANGTHAI         smallint                       null,
   constraint PK_ADMIN primary key (AD_ID)
);



/*==============================================================*/
/* Table: BINHLUAN                                              */
/*==============================================================*/
create table BINHLUAN 
(
   BL_ID                integer                        not null,
   KH_ID                integer                        not null,
   GIAY_ID              integer                        not null,
   BL_NOIDUNG           long varchar                   null,
   BL_TRANGTHAI         smallint                       null,
   constraint PK_BINHLUAN primary key (BL_ID)
);


/*==============================================================*/
/* Table: CATRUC                                                */
/*==============================================================*/
create table CATRUC 
(
   CA_ID                integer                        not null,
   AD_ID                integer                        not null,
   CA_TEN               varchar(100)                   null,
   CA_TRANGTHAI         smallint                       null,
   constraint PK_CATRUC primary key (CA_ID)
);

/*==============================================================*/
/* Table: CHITIETHOADON                                         */
/*==============================================================*/
create table CHITIETHOADON 
(
   GIAY_ID              integer                        not null,
   HD_ID                integer                        not null,
   SOLUONG              integer                        null,
   constraint PK_CHITIETHOADON primary key clustered (GIAY_ID, HD_ID)
);


/*==============================================================*/
/* Table: GIAY                                                  */
/*==============================================================*/
create table GIAY 
(
   GIAY_ID              integer                        not null,
   LOAI_ID              integer                        not null,
   KM_ID                integer                        not null,
   NCC_ID               integer                        not null,
   GIAY_TEN             varchar(100)                   null,
   GIAY_GIA             numeric(8,2)                   null,
   GIAY_HINHANH         long binary                    null,
   GIAY_MOTA            long varchar                   null,
   GIAY_TRANGTHAI       smallint                       null,
   constraint PK_GIAY primary key (GIAY_ID)
);



/*==============================================================*/
/* Table: HOADON                                                */
/*==============================================================*/
create table HOADON 
(
   HD_ID                integer                        not null,
   KH_ID                integer                        not null,
   NV_ID                integer                        not null,
   HD_NGAYLAP           varchar(10)                    null,
   HD_TRANGTHAI         smallint                       null,
   constraint PK_HOADON primary key (HD_ID)
);



/*==============================================================*/
/* Table: KHACHHANG                                             */
/*==============================================================*/
create table KHACHHANG 
(
   KH_ID                integer                        not null,
   KH_USERNAME          varchar(50)                    null,
   KH_PASSWORD          varchar(50)                    null,
   KH_HOTEN             varchar(100)                   null,
   KH_NGAYSINH          varchar(10)                    null,
   KH_GIOITINH          smallint                       null,
   KH_DIACHI            varchar(200)                   null,
   KH_SDT               varchar(11)                    null,
   KH_TRANGTHAI         smallint                       null,
   constraint PK_KHACHHANG primary key (KH_ID)
);



/*==============================================================*/
/* Table: KHUYENMAI                                             */
/*==============================================================*/
create table KHUYENMAI 
(
   KM_ID                integer                        not null,
   KM_NGAYBD            varchar(10)                    null,
   KM_NGAYKT            varchar(10)                    null,
   KM_PHANTRAM          float                          null,
   KM_TRANGTHAI         smallint                       null,
   constraint PK_KHUYENMAI primary key (KM_ID)
);


/*==============================================================*/
/* Table: LOAIGIAY                                              */
/*==============================================================*/
create table LOAIGIAY 
(
   LOAI_ID              integer                        not null,
   LOAI_TEN             varchar(200)                   null,
   LOAI_TRANGTHAI       smallint                       null,
   constraint PK_LOAIGIAY primary key (LOAI_ID)
);


/*==============================================================*/
/* Table: NHACUNGCAP                                            */
/*==============================================================*/
create table NHACUNGCAP 
(
   NCC_ID               integer                        not null,
   NCC_TEN              varchar(100)                   null,
   NCC_TRANGTHAI        smallint                       null,
   constraint PK_NHACUNGCAP primary key (NCC_ID)
);



/*==============================================================*/
/* Table: NHANVIEN                                              */
/*==============================================================*/
create table NHANVIEN 
(
   NV_ID                integer                        not null,
   NV_USERNAME          varchar(50)                    null,
   NV_PASSWORD          varchar(50)                    null,
   NV_HOTEN             varchar(100)                   null,
   NV_GIOITINH          smallint                       null,
   NV_NGAYSINH          varchar(10)                    null,
   NV_DIACHI            varchar(200)                   null,
   NV_SDT               varchar(11)                    null,
   NV_TRANGTHAI         smallint                       null,
   constraint PK_NHANVIEN primary key (NV_ID)
);


/*==============================================================*/
/* Table: NHANVIEN_CATRUC                                       */
/*==============================================================*/
create table NHANVIEN_CATRUC 
(
   CA_ID                integer                        not null,
   NV_ID                integer                        not null,
   constraint PK_NHANVIEN_CATRUC primary key clustered (CA_ID, NV_ID)
);


alter table BINHLUAN
   add constraint FK_BINHLUAN_BINHLUAN__GIAY foreign key (GIAY_ID)
      references GIAY (GIAY_ID)
      on update restrict
      on delete restrict;

alter table BINHLUAN
   add constraint FK_BINHLUAN_KHACHHANG_KHACHHAN foreign key (KH_ID)
      references KHACHHANG (KH_ID)
      on update restrict
      on delete restrict;

alter table CATRUC
   add constraint FK_CATRUC_ADMIN_CAT_ADMIN foreign key (AD_ID)
      references ADMIN (AD_ID)
      on update restrict
      on delete restrict;

alter table CHITIETHOADON
   add constraint FK_CHITIETH_GIAY_CHIT_GIAY foreign key (GIAY_ID)
      references GIAY (GIAY_ID)
      on update restrict
      on delete restrict;

alter table CHITIETHOADON
   add constraint FK_CHITIETH_HOADON_CH_HOADON foreign key (HD_ID)
      references HOADON (HD_ID)
      on update restrict
      on delete restrict;

alter table GIAY
   add constraint FK_GIAY_GIAY_KHUY_KHUYENMA foreign key (KM_ID)
      references KHUYENMAI (KM_ID)
      on update restrict
      on delete restrict;

alter table GIAY
   add constraint FK_GIAY_GIAY_LOAI_LOAIGIAY foreign key (LOAI_ID)
      references LOAIGIAY (LOAI_ID)
      on update restrict
      on delete restrict;

alter table GIAY
   add constraint FK_GIAY_GIAY_NHAC_NHACUNGC foreign key (NCC_ID)
      references NHACUNGCAP (NCC_ID)
      on update restrict
      on delete restrict;

alter table HOADON
   add constraint FK_HOADON_HOADON_NH_NHANVIEN foreign key (NV_ID)
      references NHANVIEN (NV_ID)
      on update restrict
      on delete restrict;

alter table HOADON
   add constraint FK_HOADON_KHACHHANG_KHACHHAN foreign key (KH_ID)
      references KHACHHANG (KH_ID)
      on update restrict
      on delete restrict;

alter table NHANVIEN_CATRUC
   add constraint FK_NHANVIEN_NHANVIEN__CATRUC foreign key (CA_ID)
      references CATRUC (CA_ID)
      on update restrict
      on delete restrict;

alter table NHANVIEN_CATRUC
   add constraint FK_NHANVIEN_NHANVIEN__NHANVIEN foreign key (NV_ID)
      references NHANVIEN (NV_ID)
      on update restrict
      on delete restrict;

