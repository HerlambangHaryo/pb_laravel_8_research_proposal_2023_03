<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Penelitian;
use App\Models\Peneliti;
use Illuminate\Support\Facades\Storage;

class PenelitianController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Penelitian';
    public $type        = 'backend';

    public function index()
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $data           = Penelitian::get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'data',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function create()
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'create';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $peneliti       = Peneliti::get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'peneliti',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function store(Request $request)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action


            if($request->file('lembar_pengesahan') == "") {

                $data = Penelitian::create([
                    'id_ketua'                  => $request->id_ketua,
                    'id_anggota_1'              => $request->id_anggota_1,
                    'id_anggota_2'              => $request->id_anggota_2,
                    'id_mahasiswa_1'            => $request->id_mahasiswa_1,
                    'id_mahasiswa_2'            => $request->id_mahasiswa_2,
                    'judul'                     => $request->judul,
                    'skema'                     => $request->skema,
                    'tanggal'                   => $request->tanggal,
                    'id_ketua_pusat_studi'      => $request->id_ketua_pusat_studi,
                    'id_dekan'                  => $request->id_dekan,

                    'kata_kunci_1'                  => $request->kata_kunci_1,
                    'kata_kunci_2'                  => $request->kata_kunci_2,
                    'kata_kunci_3'                  => $request->kata_kunci_3,
                    'kata_kunci_4'                  => $request->kata_kunci_4,
                    'kata_kunci_5'                  => $request->kata_kunci_5,

                    'nomor_halaman_halaman_pengesahan'              => $request->nomor_halaman_halaman_pengesahan,
                    'nomor_halaman_daftar_isi'                      => $request->nomor_halaman_daftar_isi,
                    'nomor_halaman_ringkasan'                       => $request->nomor_halaman_ringkasan,

                    'nomor_halaman_latar_belakang'                  => $request->nomor_halaman_latar_belakang,
                    'nomor_halaman_latar_belakang_masalah'          => $request->nomor_halaman_latar_belakang_masalah,
                    'nomor_halaman_rumusan_masalah'                 => $request->nomor_halaman_rumusan_masalah,
                    'nomor_halaman_tujuan_penelitian'               => $request->nomor_halaman_tujuan_penelitian,
                    'nomor_halaman_target_luaran'                   => $request->nomor_halaman_target_luaran,

                    'nomor_halaman_tinjauan_pustaka'                => $request->nomor_halaman_tinjauan_pustaka,
                    'nomor_halaman_penelitian_terdahulu'            => $request->nomor_halaman_penelitian_terdahulu,
                    'nomor_halaman_roadmap_penelitian'              => $request->nomor_halaman_roadmap_penelitian,

                    'nomor_halaman_metode_penelitian'               => $request->nomor_halaman_metode_penelitian,
                    'nomor_halaman_pembagian_tugas_tim_pengusul'    => $request->nomor_halaman_pembagian_tugas_tim_pengusul,

                    'nomor_halaman_jadwal_penelitian'               => $request->nomor_halaman_jadwal_penelitian,
                    'nomor_halaman_daftar_pustaka'                  => $request->nomor_halaman_daftar_pustaka,

                    'nomor_halaman_lampiran_1'             => $request->nomor_halaman_lampiran_1,
                    'nomor_halaman_lampiran_2'             => $request->nomor_halaman_lampiran_2,
                    'nomor_halaman_lampiran_3'             => $request->nomor_halaman_lampiran_3,
                    'nomor_halaman_lampiran_4'             => $request->nomor_halaman_lampiran_4,
                    'nomor_halaman_lampiran_5'             => $request->nomor_halaman_lampiran_5,
                    'nomor_halaman_lampiran_6'             => $request->nomor_halaman_lampiran_6,
                    'nomor_halaman_lampiran_7'             => $request->nomor_halaman_lampiran_7,
                ]);

            } else {

                //hapus old image
                Storage::disk('local')->delete('public/penelitian/'.$data->lembar_pengesahan);

                //upload new image
                $lembar_pengesahan = $request->file('lembar_pengesahan');
                $lembar_pengesahan->storeAs('public/penelitian', $lembar_pengesahan->hashName());








                $data = Penelitian::create([
                    'id_ketua'                  => $request->id_ketua,
                    'id_anggota_1'              => $request->id_anggota_1,
                    'id_anggota_2'              => $request->id_anggota_2,
                    'id_mahasiswa_1'            => $request->id_mahasiswa_1,
                    'id_mahasiswa_2'            => $request->id_mahasiswa_2,
                    'judul'                     => $request->judul,
                    'skema'                     => $request->skema,
                    'tanggal'                   => $request->tanggal,
                    'id_ketua_pusat_studi'      => $request->id_ketua_pusat_studi,
                    'id_dekan'                  => $request->id_dekan,
                    'lembar_pengesahan'         => $lembar_pengesahan->hashName(),

                    'kata_kunci_1'                  => $request->kata_kunci_1,
                    'kata_kunci_2'                  => $request->kata_kunci_2,
                    'kata_kunci_3'                  => $request->kata_kunci_3,
                    'kata_kunci_4'                  => $request->kata_kunci_4,
                    'kata_kunci_5'                  => $request->kata_kunci_5,

                    'nomor_halaman_halaman_pengesahan'              => $request->nomor_halaman_halaman_pengesahan,
                    'nomor_halaman_daftar_isi'                      => $request->nomor_halaman_daftar_isi,
                    'nomor_halaman_ringkasan'                       => $request->nomor_halaman_ringkasan,

                    'nomor_halaman_latar_belakang'                  => $request->nomor_halaman_latar_belakang,
                    'nomor_halaman_latar_belakang_masalah'          => $request->nomor_halaman_latar_belakang_masalah,
                    'nomor_halaman_rumusan_masalah'                 => $request->nomor_halaman_rumusan_masalah,
                    'nomor_halaman_tujuan_penelitian'               => $request->nomor_halaman_tujuan_penelitian,
                    'nomor_halaman_target_luaran'                   => $request->nomor_halaman_target_luaran,

                    'nomor_halaman_tinjauan_pustaka'                => $request->nomor_halaman_tinjauan_pustaka,
                    'nomor_halaman_penelitian_terdahulu'            => $request->nomor_halaman_penelitian_terdahulu,
                    'nomor_halaman_roadmap_penelitian'              => $request->nomor_halaman_roadmap_penelitian,

                    'nomor_halaman_metode_penelitian'               => $request->nomor_halaman_metode_penelitian,
                    'nomor_halaman_pembagian_tugas_tim_pengusul'    => $request->nomor_halaman_pembagian_tugas_tim_pengusul,

                    'nomor_halaman_jadwal_penelitian'               => $request->nomor_halaman_jadwal_penelitian,
                    'nomor_halaman_daftar_pustaka'                  => $request->nomor_halaman_daftar_pustaka,

                    'nomor_halaman_lampiran_1'             => $request->nomor_halaman_lampiran_1,
                    'nomor_halaman_lampiran_2'             => $request->nomor_halaman_lampiran_2,
                    'nomor_halaman_lampiran_3'             => $request->nomor_halaman_lampiran_3,
                    'nomor_halaman_lampiran_4'             => $request->nomor_halaman_lampiran_4,
                    'nomor_halaman_lampiran_5'             => $request->nomor_halaman_lampiran_5,
                    'nomor_halaman_lampiran_6'             => $request->nomor_halaman_lampiran_6,
                    'nomor_halaman_lampiran_7'             => $request->nomor_halaman_lampiran_7,
                ]);
            }


        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }

    public function edit(Penelitian $Penelitian)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'edit';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $peneliti       = Peneliti::get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'Penelitian',
                    'peneliti',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Penelitian $Penelitian)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action

            $data = Penelitian::findOrFail($Penelitian->id);

            if($request->file('lembar_pengesahan') == "") {

                $data->update([
                    'id_ketua'                  => $request->id_ketua,
                    'id_anggota_1'              => $request->id_anggota_1,
                    'id_anggota_2'              => $request->id_anggota_2,
                    'id_mahasiswa_1'            => $request->id_mahasiswa_1,
                    'id_mahasiswa_2'            => $request->id_mahasiswa_2,
                    'judul'                     => $request->judul,
                    'skema'                     => $request->skema,
                    'tanggal'                   => $request->tanggal,
                    'id_ketua_pusat_studi'      => $request->id_ketua_pusat_studi,
                    'id_dekan'                  => $request->id_dekan,

                    'kata_kunci_1'                  => $request->kata_kunci_1,
                    'kata_kunci_2'                  => $request->kata_kunci_2,
                    'kata_kunci_3'                  => $request->kata_kunci_3,
                    'kata_kunci_4'                  => $request->kata_kunci_4,
                    'kata_kunci_5'                  => $request->kata_kunci_5,


                    'uraian_tugas_ketua'            => $request->uraian_tugas_ketua,
                    'uraian_tugas_anggota_1'        => $request->uraian_tugas_anggota_1,
                    'uraian_tugas_anggota_2'        => $request->uraian_tugas_anggota_2,
                    'uraian_tugas_mahasiswa_1'      => $request->uraian_tugas_mahasiswa_1,
                    'uraian_tugas_mahasiswa_2'      => $request->uraian_tugas_mahasiswa_2,

                    'paragraf_jadwal_penelitian'        => $request->paragraf_jadwal_penelitian,
                    'paragraf_uraian_tugas'             => $request->paragraf_uraian_tugas,

                    'nomor_halaman_halaman_pengesahan'              => $request->nomor_halaman_halaman_pengesahan,
                    'nomor_halaman_daftar_isi'                      => $request->nomor_halaman_daftar_isi,
                    'nomor_halaman_ringkasan'                       => $request->nomor_halaman_ringkasan,

                    'nomor_halaman_latar_belakang'                  => $request->nomor_halaman_latar_belakang,
                    'nomor_halaman_latar_belakang_masalah'          => $request->nomor_halaman_latar_belakang_masalah,
                    'nomor_halaman_rumusan_masalah'                 => $request->nomor_halaman_rumusan_masalah,
                    'nomor_halaman_tujuan_penelitian'               => $request->nomor_halaman_tujuan_penelitian,
                    'nomor_halaman_target_luaran'                   => $request->nomor_halaman_target_luaran,

                    'nomor_halaman_tinjauan_pustaka'                => $request->nomor_halaman_tinjauan_pustaka,
                    'nomor_halaman_penelitian_terdahulu'            => $request->nomor_halaman_penelitian_terdahulu,
                    'nomor_halaman_roadmap_penelitian'              => $request->nomor_halaman_roadmap_penelitian,
                    'nomor_halaman_dasar_teori'              => $request->nomor_halaman_dasar_teori,

                    'nomor_halaman_metode_penelitian'               => $request->nomor_halaman_metode_penelitian,
                    'nomor_halaman_pembagian_tugas_tim_pengusul'    => $request->nomor_halaman_pembagian_tugas_tim_pengusul,

                    'nomor_halaman_jadwal_penelitian'               => $request->nomor_halaman_jadwal_penelitian,
                    'nomor_halaman_daftar_pustaka'                  => $request->nomor_halaman_daftar_pustaka,

                    'nomor_halaman_lampiran_1'             => $request->nomor_halaman_lampiran_1,
                    'nomor_halaman_lampiran_2'             => $request->nomor_halaman_lampiran_2,
                    'nomor_halaman_lampiran_3'             => $request->nomor_halaman_lampiran_3,
                    'nomor_halaman_lampiran_4'             => $request->nomor_halaman_lampiran_4,
                    'nomor_halaman_lampiran_5'             => $request->nomor_halaman_lampiran_5,
                    'nomor_halaman_lampiran_6'             => $request->nomor_halaman_lampiran_6,
                    'nomor_halaman_lampiran_7'             => $request->nomor_halaman_lampiran_7,
                ]);

            } else {

                //hapus old image
                Storage::disk('local')->delete('public/penelitian/'.$data->lembar_pengesahan);

                //upload new image
                $lembar_pengesahan = $request->file('lembar_pengesahan');
                $lembar_pengesahan->storeAs('public/penelitian', $lembar_pengesahan->hashName());

                $data->update([
                    'id_ketua'                  => $request->id_ketua,
                    'id_anggota_1'              => $request->id_anggota_1,
                    'id_anggota_2'              => $request->id_anggota_2,
                    'id_mahasiswa_1'            => $request->id_mahasiswa_1,
                    'id_mahasiswa_2'            => $request->id_mahasiswa_2,
                    'judul'                     => $request->judul,
                    'skema'                     => $request->skema,
                    'tanggal'                   => $request->tanggal,
                    'id_ketua_pusat_studi'      => $request->id_ketua_pusat_studi,
                    'id_dekan'                  => $request->id_dekan,
                    'lembar_pengesahan'         => $lembar_pengesahan->hashName(),

                    'kata_kunci_1'                  => $request->kata_kunci_1,
                    'kata_kunci_2'                  => $request->kata_kunci_2,
                    'kata_kunci_3'                  => $request->kata_kunci_3,
                    'kata_kunci_4'                  => $request->kata_kunci_4,
                    'kata_kunci_5'                  => $request->kata_kunci_5,


                    'uraian_tugas_ketua'            => $request->uraian_tugas_ketua,
                    'uraian_tugas_anggota_1'        => $request->uraian_tugas_anggota_1,
                    'uraian_tugas_anggota_2'        => $request->uraian_tugas_anggota_2,
                    'uraian_tugas_mahasiswa_1'      => $request->uraian_tugas_mahasiswa_1,
                    'uraian_tugas_mahasiswa_2'      => $request->uraian_tugas_mahasiswa_2,

                    'paragraf_jadwal_penelitian'        => $request->paragraf_jadwal_penelitian,
                    'paragraf_uraian_tugas'             => $request->paragraf_uraian_tugas,

                    'paragraf_uraian_tugas'             => $request->paragraf_uraian_tugas,
                    'paragraf_uraian_tugas'             => $request->paragraf_uraian_tugas,
                    'paragraf_uraian_tugas'             => $request->paragraf_uraian_tugas,

                    'nomor_halaman_halaman_pengesahan'              => $request->nomor_halaman_halaman_pengesahan,
                    'nomor_halaman_daftar_isi'                      => $request->nomor_halaman_daftar_isi,
                    'nomor_halaman_ringkasan'                       => $request->nomor_halaman_ringkasan,

                    'nomor_halaman_latar_belakang'                  => $request->nomor_halaman_latar_belakang,
                    'nomor_halaman_latar_belakang_masalah'          => $request->nomor_halaman_latar_belakang_masalah,
                    'nomor_halaman_rumusan_masalah'                 => $request->nomor_halaman_rumusan_masalah,
                    'nomor_halaman_tujuan_penelitian'               => $request->nomor_halaman_tujuan_penelitian,
                    'nomor_halaman_target_luaran'                   => $request->nomor_halaman_target_luaran,

                    'nomor_halaman_tinjauan_pustaka'                => $request->nomor_halaman_tinjauan_pustaka,
                    'nomor_halaman_penelitian_terdahulu'            => $request->nomor_halaman_penelitian_terdahulu,
                    'nomor_halaman_roadmap_penelitian'              => $request->nomor_halaman_roadmap_penelitian,
                    'nomor_halaman_dasar_teori'              => $request->nomor_halaman_dasar_teori,


                    'nomor_halaman_metode_penelitian'               => $request->nomor_halaman_metode_penelitian,
                    'nomor_halaman_pembagian_tugas_tim_pengusul'    => $request->nomor_halaman_pembagian_tugas_tim_pengusul,

                    'nomor_halaman_jadwal_penelitian'               => $request->nomor_halaman_jadwal_penelitian,
                    'nomor_halaman_daftar_pustaka'                  => $request->nomor_halaman_daftar_pustaka,

                    'nomor_halaman_lampiran_1'             => $request->nomor_halaman_lampiran_1,
                    'nomor_halaman_lampiran_2'             => $request->nomor_halaman_lampiran_2,
                    'nomor_halaman_lampiran_3'             => $request->nomor_halaman_lampiran_3,
                    'nomor_halaman_lampiran_4'             => $request->nomor_halaman_lampiran_4,
                    'nomor_halaman_lampiran_5'             => $request->nomor_halaman_lampiran_5,
                    'nomor_halaman_lampiran_6'             => $request->nomor_halaman_lampiran_6,
                    'nomor_halaman_lampiran_7'             => $request->nomor_halaman_lampiran_7,
                ]);
            }



            if($request->file('surat_pernyataan_kesanggupan_ketua') != "")
            {
                //hapus old image
                Storage::disk('local')->delete('public/surat_pendukung/'.$data->surat_pernyataan_kesanggupan_ketua);

                //upload new image
                $surat_pernyataan_kesanggupan_ketua = $request->file('surat_pernyataan_kesanggupan_ketua');
                $surat_pernyataan_kesanggupan_ketua->storeAs('public/surat_pendukung', $surat_pernyataan_kesanggupan_ketua->hashName());

                $data->update([ 'surat_pernyataan_kesanggupan_ketua' => $surat_pernyataan_kesanggupan_ketua->hashName(),  ]);
            }
            if($request->file('surat_pernyataan_kesanggupan_anggota_1') != "")
            {
                //hapus old image
                Storage::disk('local')->delete('public/surat_pendukung/'.$data->surat_pernyataan_kesanggupan_anggota_1);

                //upload new image
                $surat_pernyataan_kesanggupan_anggota_1 = $request->file('surat_pernyataan_kesanggupan_anggota_1');
                $surat_pernyataan_kesanggupan_anggota_1->storeAs('public/surat_pendukung', $surat_pernyataan_kesanggupan_anggota_1->hashName());

                $data->update([ 'surat_pernyataan_kesanggupan_anggota_1' => $surat_pernyataan_kesanggupan_anggota_1->hashName(),  ]);
            }
            if($request->file('surat_pernyataan_kesanggupan_anggota_2') != "")
            {
                //hapus old image
                Storage::disk('local')->delete('public/surat_pendukung/'.$data->surat_pernyataan_kesanggupan_anggota_2);

                //upload new image
                $surat_pernyataan_kesanggupan_anggota_2 = $request->file('surat_pernyataan_kesanggupan_anggota_2');
                $surat_pernyataan_kesanggupan_anggota_2->storeAs('public/surat_pendukung', $surat_pernyataan_kesanggupan_anggota_2->hashName());

                $data->update([ 'surat_pernyataan_kesanggupan_anggota_2' => $surat_pernyataan_kesanggupan_anggota_2->hashName(),  ]);
            }
            if($request->file('surat_pernyataan_kesanggupan_mahasiswa_1') != "")
            {
                //hapus old image
                Storage::disk('local')->delete('public/surat_pendukung/'.$data->surat_pernyataan_kesanggupan_mahasiswa_1);

                //upload new image
                $surat_pernyataan_kesanggupan_mahasiswa_1 = $request->file('surat_pernyataan_kesanggupan_mahasiswa_1');
                $surat_pernyataan_kesanggupan_mahasiswa_1->storeAs('public/surat_pendukung', $surat_pernyataan_kesanggupan_mahasiswa_1->hashName());

                $data->update([ 'surat_pernyataan_kesanggupan_mahasiswa_1' => $surat_pernyataan_kesanggupan_mahasiswa_1->hashName(),  ]);
            }
            if($request->file('surat_pernyataan_kesanggupan_mahasiswa_2') != "")
            {
                //hapus old image
                Storage::disk('local')->delete('public/surat_pendukung/'.$data->surat_pernyataan_kesanggupan_mahasiswa_2);

                //upload new image
                $surat_pernyataan_kesanggupan_mahasiswa_2 = $request->file('surat_pernyataan_kesanggupan_mahasiswa_2');
                $surat_pernyataan_kesanggupan_mahasiswa_2->storeAs('public/surat_pendukung', $surat_pernyataan_kesanggupan_mahasiswa_2->hashName());

                $data->update([ 'surat_pernyataan_kesanggupan_mahasiswa_2' => $surat_pernyataan_kesanggupan_mahasiswa_2->hashName(),  ]);
            }

            if($request->file('surat_pernyataan_ketua') != "")
            {
                //hapus old image
                Storage::disk('local')->delete('public/surat_pendukung/'.$data->surat_pernyataan_ketua);

                //upload new image
                $surat_pernyataan_ketua = $request->file('surat_pernyataan_ketua');
                $surat_pernyataan_ketua->storeAs('public/surat_pendukung', $surat_pernyataan_ketua->hashName());

                $data->update([ 'surat_pernyataan_ketua' => $surat_pernyataan_ketua->hashName(),  ]);
            }
            if($request->file('surat_pernyataan_anggota_1') != "")
            {
                //hapus old image
                Storage::disk('local')->delete('public/surat_pendukung/'.$data->surat_pernyataan_anggota_1);

                //upload new image
                $surat_pernyataan_anggota_1 = $request->file('surat_pernyataan_anggota_1');
                $surat_pernyataan_anggota_1->storeAs('public/surat_pendukung', $surat_pernyataan_anggota_1->hashName());

                $data->update([ 'surat_pernyataan_anggota_1' => $surat_pernyataan_anggota_1->hashName(),  ]);
            }
            if($request->file('surat_pernyataan_anggota_2') != "")
            {
                //hapus old image
                Storage::disk('local')->delete('public/surat_pendukung/'.$data->surat_pernyataan_anggota_2);

                //upload new image
                $surat_pernyataan_anggota_2 = $request->file('surat_pernyataan_anggota_2');
                $surat_pernyataan_anggota_2->storeAs('public/surat_pendukung', $surat_pernyataan_anggota_2->hashName());

                $data->update([ 'surat_pernyataan_anggota_2' => $surat_pernyataan_anggota_2->hashName(),  ]);
            }
            if($request->file('surat_pernyataan_mahasiswa_1') != "")
            {
                //hapus old image
                Storage::disk('local')->delete('public/surat_pendukung/'.$data->surat_pernyataan_mahasiswa_1);

                //upload new image
                $surat_pernyataan_mahasiswa_1 = $request->file('surat_pernyataan_mahasiswa_1');
                $surat_pernyataan_mahasiswa_1->storeAs('public/surat_pendukung', $surat_pernyataan_mahasiswa_1->hashName());

                $data->update([ 'surat_pernyataan_mahasiswa_1' => $surat_pernyataan_mahasiswa_1->hashName(),  ]);
            }
            if($request->file('surat_pernyataan_mahasiswa_2') != "")
            {
                //hapus old image
                Storage::disk('local')->delete('public/surat_pendukung/'.$data->surat_pernyataan_mahasiswa_2);

                //upload new image
                $surat_pernyataan_mahasiswa_2 = $request->file('surat_pernyataan_mahasiswa_2');
                $surat_pernyataan_mahasiswa_2->storeAs('public/surat_pendukung', $surat_pernyataan_mahasiswa_2->hashName());

                $data->update([ 'surat_pernyataan_mahasiswa_2' => $surat_pernyataan_mahasiswa_2->hashName(),  ]);
            }
        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }

    public function show(Penelitian $Penelitian)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();
            session(['id_penelitian' => $Penelitian->id]);

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'show';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action
            $data = Penelitian::where('id', '=', $Penelitian->id)
                            ->get();

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'Penelitian',
                    'data',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function deletedata(Penelitian $Penelitian)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();

        // ----------------------------------------------------------- Agent
            $agent              = new Agent();
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));

            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'delete';
            $view           = define_view($this->template, $this->type, $this->content, $additional_view, $view_file);

        // ----------------------------------------------------------- Action

        // ----------------------------------------------------------- Send
            return view($view,
                compact(
                    'template',
                    'mode',
                    'themecolor',
                    'content',
                    'user',
                    'panel_name',
                    'active_as',
                    'view_file',
                    'Penelitian',
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function destroy($id)
    {
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $data = Penelitian::findOrFail($id);
            $data->delete();

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }
}
