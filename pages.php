<?php

                    // Report all errors except E_NOTICE
                    error_reporting(error_reporting() & ~E_NOTICE);
                    //error_reporting(level);
                    include "koneksi.php";
                    //include 'filename';

                        $page = isset($_GET['page']) ? $_GET['page'] : "";
                        $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";

                        if ($page == "buku") {
                            if ($aksi == "") {
                                include "page/buku/buku.php";
                            }elseif ($aksi == "tambah") {
                                include "page/buku/tambah.php";
                            }elseif ($aksi == "create") {
                                include "page/buku/create.php";
                            }elseif ($aksi == "delete") {
                                include "page/buku/delete.php";
                            }elseif ($aksi == "edit") {
                                include "page/buku/edit.php";
                            }elseif ($aksi == "update") {
                                include "page/buku/update.php";
                            } 
                        }elseif ($page == "anggota") {
                            if ($aksi == "") {
                                include "page/anggota/anggota.php";
                            }elseif ($aksi == "tambah") {
                                include "page/anggota/tambah.php";
                            }elseif ($aksi == "create") {
                                include "page/anggota/create.php";
                            }elseif ($aksi == "delete") {
                                include "page/anggota/delete.php";
                            }elseif ($aksi == "edit") {
                                include "page/anggota/edit.php";
                            }elseif ($aksi == "update") {
                                include "page/anggota/update.php";
                            }elseif ($aksi == "details") {
                                include "page/anggota/details.php";
                            } 
                        }elseif ($page == "transaksi") {
                            if ($aksi == "") {
                                include "page/transaksi/transaksi.php";
                            }elseif ($aksi == "tambah") {
                                include "page/transaksi/tambah.php";
                            }elseif ($aksi == "create") {
                                include "page/transaksi/create.php";
                            }elseif ($aksi == "delete") {
                                include "page/transaksi/delete.php";
                            }elseif ($aksi == "edit") {
                                include "page/transaksi/edit.php";
                            }elseif ($aksi == "update") {
                                include "page/transaksi/update.php";
                            }elseif ($aksi == "details") {
                                include "page/transaksi/details.php";
                            }
                        }elseif ($page == ""){
                            include "home.php";
                        }

                   ?>