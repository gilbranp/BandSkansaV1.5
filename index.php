

<div class="row">
                <div class="col-md-6">
                  <div class="row">


                    @foreach ($anggota as $anggotaa)
  

                    {{-- ANGGOTA 1 --}}
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="/images/{{ $anggotaa->img }}" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>{{ $anggotaa->nama }}</span></p>
                        <p><span class="title-s">Role: </span> <span>{{ $anggotaa->role }}</span></p>
                        <p><span class="title-s">Genre: </span> <span>{{ $anggotaa->genre }}</span></p>
                      </div>
                    </div>
                    
                    @endforeach

                  </div>
                  {{-- <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <span>HTML</span> <span class="pull-right">85%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>CSS3</span> <span class="pull-right">75%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">50%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right">90%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> --}}
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Profil Band
                      </h5>
                    </div>
                    <p class="lead">
                      sejarah band smkn 1 bawang "rock ballery art'

                      dalam smkn 1 bawang terdapat banyak extrakurikuler, salah satunya extrakurikuler band
                      extrakurikuler band sudaj ada sejak dahulu, namun untuk rock ballery art ini dibuat pada tahun 2017 oleh bpk. willy ferdiansyah selaku pembina pada saat itu
                      saat ini rock ballery art memasuki tahun ke 7
                      band smkn 1 bawang pernah mengikuti parade dan festival musik 
                      pada saat ini pembina band smkn 1 bawang adalah bpk. fauzan akhmad mahanani dan bpk. andrian kristanto
                    </p>
                    <p class="lead">
                      Visi
                      menciptakan generasi muda yang cerdas, kreatif, berjiwa seni, berkarya dan berpestasi

                    </p>
                    <p class="lead">
                      Misi
                      1. meningkatkan pikiran yang kreatif dalam berkarya
                      2. menjadi ajang menyalurkan bakat
                      3. lebih memahami musik dan alat musik 
                      4. melaksanakan program pendidikan akademik dibidang musik
                      5. menjunjung tinggi profesionalisme dalam bermusik dan berorganisasi
                    </p>
                  </div>
                </div>
              </div>