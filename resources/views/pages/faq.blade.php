@extends('layouts.base')

@section('title', 'IDLe FAQ')

@section('css')
<style media="screen">
  body{
    background-color: #F3F2F0;
  }
  .card{
    border-radius: 10px;
    padding: 25px 10%;
  }

  small{
    color: var(--primer);
  }
  .btn-link,
  .btn-link:hover{
    color: var(--primer);
  }
</style>
@endsection

@section('content')
    <div class="container hero" style="margin-top: 1px;">
        <div class="row">
            <div class="col-md-12" style="height: auto;padding-top: 62px;">
                <div style="margin-bottom: 11px;">
                    <h1  style="color: rgb(0,0,0);margin-top: 71px;, sans-serif;"></h1>
                    <h1 class="text-center page_title">FAQ</h1>
                    <h5 class="text-center">Frequently Asked Question</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- *****************************************************************************************************************
       DESCRIPTION
       ***************************************************************************************************************** -->
   <div class="card">
       <div class="card-body">
            <div id="accordion"> 
              
               {{-- <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q1" aria-expanded="true" aria-controls="collapseOne">
                        ISIC: Apa sih ISIC 2022 itu?
                      </button>
                    </h5>
                </div> --}}
                {{-- <div id="Q1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      BITS 2022 (Bulan IT Sistem Informasi) merupakan serangkaian ajang kompetisi di bidang IT tingkat Fakultas yang diselenggarakan oleh Himpunan Mahasiswa Sistem Informasi yang akan diadakan pada tahun 2022.
                    </div>
                </div> --}}
                <div class="card-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#Q1" aria-expanded="true" aria-controls="collapseOne">
                      ISIC: Apa sih ISIC 2022 itu?
                    </button>
                  </h5>
              </div>
              <div id="Q1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    ISIC merupakan sebuah kompetisi bidang IT yang bisa menjadi wadah untuk mahasiswa Fakultas Ilmu Komputer agar dapat melakukan proses uji kompetensi ide-ide mereka secara intensif dan juga teratur dalam lingkup fakultas ilmu komputer Universitas Jember.
                  </div>
              </div> 
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#Q12" aria-expanded="true" aria-controls="collapseOne">
                    ISIC: Apakah ada tema khusus dalam perlombaan ISIC ini?
                  </button>
                </h5>
            </div>
            <div id="Q12" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  Tema dalam perlombaan ISIC 2022 kali ini yaitu "Superior ICT Innovation to Build a Smart Society". Untuk selengkapnya bisa dilihat di dalam rulebook.
                </div>
            </div>
            {{-- <div class="card-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#Q2" aria-expanded="true" aria-controls="collapseOne">
                      ISIC: Acara apa saja yang akan diadakan oleh ISIC 2022 ini?
                    </button>
                  </h5>
              </div>
              <div id="Q2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    BITS 2022 ini akan mengadakan acara ISIC dan PKM Go untuk mengisi kegiatan BITS 2022 ini.
                  </div>
              </div> --}}
            
            {{-- <div class="card-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#Q3" aria-expanded="true" aria-controls="collapseOne">
                      BITS: Apa perbedaan ISIC dan PKM Go?
                    </button>
                  </h5>
              </div>
              <div id="Q3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    ISIC merupakan sebuah kompetisi bidang IT yang bisa menjadi wadah untuk mahasiswa Fakultas Ilmu Komputer agar dapat melakukan proses uji kompetensi ide-ide mereka secara intensif dan juga teratur dalam lingkup fakultas ilmu komputer Universitas Jember. Sedangkan PKM Go merupakan acara perlombaan di bidang Pekan Kreativitas Mahasiswa (PKM) tingkat Fakultas Ilmu Komputer Universitas Jember yang bertujuan untuk menjadi wadah sebagai media untuk menuangkan ide, mengkaji serta mengembangkan ilmu dan teknologi yang telah di pelajari di perkulihan. Untuk info lebih lengkap bisa cek instagram BITS 2022.
                  </div>
              </div> --}}   
            <div class="card-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#Q4" aria-expanded="true" aria-controls="collapseOne">
                      ISIC: Kapan pelaksanaan ISIC 2022?
                    </button>
                  </h5>
              </div>
              <div id="Q4" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    ISIC 2022 akan dilaksanakan pada tanggal 10 april - 26 juni 2022.
                  </div>
              </div>
            
            <div class="card-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#Q5" aria-expanded="true" aria-controls="collapseOne">
                      ISIC: Bagaimana cara mendaftar ISIC 2022?
                    </button>
                  </h5>
              </div>
              <div id="Q5" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Pendaftaran dilakukan melalui Website IDLe.
                  </div>
              </div>
            
            <div class="card-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#Q6" aria-expanded="true" aria-controls="collapseOne">
                      ISIC: Apakah pendaftaran ISIC 2022 dipungut biaya?
                    </button>
                  </h5>
              </div>
              <div id="Q6" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Tidak, pendaftaran ISIC 2022 ini gratis tidak dipungut biaya.
                  </div>
              </div>
            
            <div class="card-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#Q7" aria-expanded="true" aria-controls="collapseOne">
                      ISIC: Apakah perlombaan ISIC 2022 hanya boleh diikuti oleh mahasiswa prodi Sistem Informasi?
                    </button>
                  </h5>
              </div>
              <div id="Q7" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Tidak, ISIC juga merupakan bagian dari IDLe, yang berarti mahasiswa fakultas ilmu komputer bisa join, silahkan lihat rulebook bagian ketentuan peserta untuk lebih jelas.
                  </div>
              </div>
            
            <div class="card-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#Q8" aria-expanded="true" aria-controls="collapseOne">
                      ISIC: Apa hubungannya ISIC dengan Gemastik?
                    </button>
                  </h5>
              </div>
              <div id="Q8" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Gemastik merupakan lomba tingkat nasional, terdapat sub lomba yang merupakan inspirasi dari lomba ISIC. Adanya acara ISIC juga merupakan ajang dalam mempersiapkan mahasiswa mengikuti gemastik.
                  </div>
              </div>
            
            <div class="card-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#Q9" aria-expanded="true" aria-controls="collapseOne">
                      ISIC: Apakah template proposal sudah disediakan dan kapan dibagikan?
                    </button>
                  </h5>
              </div>
              <div id="Q9" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Sudah, template akan disediakan oleh panitia dan untuk pembagian template sesuai dengan jadwal di website.
                  </div>
              </div>
            
            <div class="card-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#Q10" aria-expanded="true" aria-controls="collapseOne">
                      ISIC: Dalam satu tim terdiri dari berapa orang?
                    </button>
                  </h5>
              </div>
              <div id="Q10" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Satu tim terdiri dari maksimal 3 orang dengan 1 mahasiswa menjadi ketua tim.
                  </div>
              </div>
            
            <div class="card-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#Q11" aria-expanded="true" aria-controls="collapseOne">
                      ISIC: Setiap mahasiswa boleh mengikuti berapa bidang perlombaan?
                    </button>
                  </h5>
              </div>
              <div id="Q11" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Mahasiswa diberi kesempatan dengan mengikuti maksimal 3 bidang perlombaan, dengan hanya 1 kali menjadi ketua tim.
                  </div>
              </div>
              
                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q13" aria-expanded="true" aria-controls="collapseOne">
                        ITec: ITeC itu apa sih?
                      </button>
                    </h5>
                </div>
              
                <div id="Q13" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      ITeC memiliki kepanjangan Information Technology Competition, yang mana merupakan sebuah ajang perlombaan Karya Tulis Ilmiah bertema teknologi informasi yang diselenggarakan oleh Himpunan Mahasiswa Teknologi Informasi Fakultas Ilmu Komputer Universitas Jember.                   
                  	</div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q14" aria-expanded="true" aria-controls="collapseOne">
                        ITec: Kapan pelaksanaan ITeC?
                      </button>
                    </h5>
                </div>
                <div id="Q14" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      ITeC dilaksanakan mulai tanggal 4 April 2022 - 2 Mei 2022.                    
                  	</div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q15" aria-expanded="true" aria-controls="collapseOne">
                        ITec: Tahapannya apa saja yang ada di ITeC?
                      </button>
                    </h5>
                </div>
                <div id="Q15" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Perlombaan ITeC dilaksanakan secara bertahap mulai dari Tahap 1 (Pendaftaran dan Pengumpulan BAB 1), Tahap 2 (Pembuatan pamflet mengenai penjelasan gagasan), Tahap 3 (Pembuatan Full Proposal), Tahap 4 (Final dan Presentasi).
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q16" aria-expanded="true" aria-controls="collapseOne">
                        ITec: Bagaimana cara pendaftaran ITeC?
                      </button>
                    </h5>
                </div>
                <div id="Q16" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Pendaftaran dilakukan melalui Website IDLe.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q17" aria-expanded="true" aria-controls="collapseOne">
                        ITec: Apakah pendaftarannya dipungut biaya?
                      </button>
                    </h5>
                </div>
                <div id="Q17" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Pendaftaran tidak dipungut biaya apapun.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q18" aria-expanded="true" aria-controls="collapseOne">
                        ITec: Apakah perlombaan ini hanya dikhususkan untuk mahasiswa Teknologi Informasi saja?
                      </button>
                    </h5>
                </div>
                <div id="Q18" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Tidak, ITeC juga merupakan bagian dari IDLe, yang berarti mahasiswa fakultas ilmu komputer bisa join, silahkan lihat rulebook bagian ketentuan peserta untuk lebih jelas.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q19" aria-expanded="true" aria-controls="collapseOne">
                        ITec: Apakah ada ketentuan tema dalam setiap kategori perlombaan?
                      </button>
                    </h5>
                </div>
                <div id="Q19" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Ada, UI/UX akan lebih berfokus pada membantu UMKM meningkatkan ekonomi, sementara untuk IoT bebas. Ketentuan lengkap bisa dilihat lagi di rulebook.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q20" aria-expanded="true" aria-controls="collapseOne">
                        ITec: Apa hubungannya ITeC dengan gemastik?
                      </button>
                    </h5>
                </div>
                <div id="Q20" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Gemastik merupakan lomba tingkat nasional, terdapat sub lomba yang merupakan inspirasi dari lomba ITeC. Adanya acara ITeC juga merupakan ajang dalam mempersiapkan mahasiswa mengikuti gemastik.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q21" aria-expanded="true" aria-controls="collapseOne">
                        ITec: Apakah disediakan template untuk penyusunan proposal?
                      </button>
                    </h5>
                </div>
                <div id="Q21" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Iya, Template disediakan oleh panitia.
                    </div>
                </div>
              
              <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q22" aria-expanded="true" aria-controls="collapseOne">
                        ITec: Kapan template akan dibagikan?
                      </button>
                    </h5>
                </div>
                <div id="Q22" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Sesuai dengan timeline di website IDLe.
                    </div>
                </div>
              
              <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q23" aria-expanded="true" aria-controls="collapseOne">
                        ITec: Dalam satu tim terdiri dari berapa orang?
                      </button>
                    </h5>
                </div>
                <div id="Q23" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Setiap tim terdiri maksimal 3 orang mahasiswa dan salah satu mahasiswa bertindak sebagai ketua tim.
                    </div>
                </div>
              
              <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q24" aria-expanded="true" aria-controls="collapseOne">
                        ITec: Apakah peserta hanya diperbolehkan mengikuti satu bidang perlombaan saja?
                      </button>
                    </h5>
                </div>
                <div id="Q24" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Peserta diperbolehkan mengikuti maksimal 2 kategori lomba yang berbeda, tetapi hanya diperkenankan menjadi salah satu ketua tim dari kategori lomba yang diikuti.
                    </div>
                </div>

            </div>
       </div>
   </div>

   <div class="card" style="margin-top: 10px;" id="tanya">
       <div class="card-body">
           <h2>Belum menemukan jawaban yang tepat?</h2>
           <small>Kirim pesan via Whatsapp</small>
           <form class="" action="{{ route('faq.ask') }}" method="post" autocomplete="off" target="_blank">
             @csrf
              <div class="form-group">
                 <label>Nama Tim</label>
                 <input class="form-control" type="text" name="nama_tim" required placeholder="Nama Tim">
              </div>
              <div class="form-group">
                 <label>Bidang Lomba</label>
                 <select class="form-control" name="kategori" required>
                    <option value="0" disabled>--Pilih bidang lomba--</option>
                    @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->nama_kategori }}">{{ $kategori->nama_kategori }}</option>
                    @endforeach
                 </select>
              </div>
              <div class="form-group">
                  <label>Isi Pesan</label>
                  <textarea name="pesan" rows="4" style="width:100%" required></textarea>
              </div>
              <button class="btn btn-success shadow" type="submit">Tanyakan</button>
           </form>
       </div>
    </div>

@endsection
