<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1 class="text-center">Form Data diri</h1>
    <hr>
    <div class="container px-5 my-5">
        <form action="{{url('formInput')}}" method="GET">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" id="nama" type="text" placeholder="Nama" data-sb-validations="required" name="nama"/>
                <label for="nama">Nama</label>
                <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" name="email"/>
                <label for="emailAddress">Email Address</label>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="lokasi" aria-label="Lokasi" name="lokasi">
                    <option value="Nanggroe Aceh Darussalam (Ibu Kota Banda Aceh)">Nanggroe Aceh Darussalam (Ibu Kota Banda Aceh)</option>
                    <option value="Sumatera Utara (Ibu Kota Medan)">Sumatera Utara (Ibu Kota Medan)</option>
                    <option value="Sumatera Selatan (Ibu Kota Palembang)">Sumatera Selatan (Ibu Kota Palembang)</option>
                    <option value="Sumatera Barat (Ibu Kota Padang)">Sumatera Barat (Ibu Kota Padang)</option>
                    <option value="Bengkulu (Ibu Kota Bengkulu)">Bengkulu (Ibu Kota Bengkulu)</option>
                    <option value="Riau (Ibu Kota Pekanbaru)">Riau (Ibu Kota Pekanbaru)</option>
                    <option value="Kepulauan Riau (Ibu Kota Tanjung Pinang)">Kepulauan Riau (Ibu Kota Tanjung Pinang)</option>
                    <option value="Jambi (Ibu Kota Jambi)">Jambi (Ibu Kota Jambi)</option>
                    <option value="Lampung (Ibu Kota Bandar Lampung)">Lampung (Ibu Kota Bandar Lampung)</option>
                    <option value="Bangka Belitung (Ibu Kota Pangkal Pinang)">Bangka Belitung (Ibu Kota Pangkal Pinang)</option>
                    <option value="Kalimantan Barat (Ibu Kota Pontianak)">Kalimantan Barat (Ibu Kota Pontianak)</option>
                    <option value="Kalimantan Timur (Ibu Kota Samarinda)">Kalimantan Timur (Ibu Kota Samarinda)</option>
                    <option value="Kalimantan Selatan (Ibu Kota Banjarbaru)">Kalimantan Selatan (Ibu Kota Banjarbaru)</option>
                    <option value="Kalimantan Tengah (Ibu Kota Palangkaraya)">Kalimantan Tengah (Ibu Kota Palangkaraya)</option>
                    <option value="Kalimantan Utara (Ibu Kota Tanjung Selor)">Kalimantan Utara (Ibu Kota Tanjung Selor)</option>
                    <option value="Banten (Ibu Kota Serang)">Banten (Ibu Kota Serang)</option>
                    <option value="DKI Jakarta (Ibu Kota Jakarta)">DKI Jakarta (Ibu Kota Jakarta)</option>
                    <option value="Jawa Barat (Ibu Kota Bandung)">Jawa Barat (Ibu Kota Bandung)</option>
                    <option value="Jawa Tengah (Ibu Kota Semarang)">Jawa Tengah (Ibu Kota Semarang)</option>
                    <option value="Daerah Istimewa Yogyakarta (Ibu Kota Yogyakarta)">Daerah Istimewa Yogyakarta (Ibu Kota Yogyakarta)</option>
                    <option value="Jawa Timur (Ibu Kota Surabaya)">Jawa Timur (Ibu Kota Surabaya)</option>
                    <option value="Bali (Ibu Kota Denpasar)">Bali (Ibu Kota Denpasar)</option>
                    <option value="Nusa Tenggara Timur (Ibu Kota Kupang)">Nusa Tenggara Timur (Ibu Kota Kupang)</option>
                    <option value="Nusa Tenggara Barat (Ibu Kota Mataram)">Nusa Tenggara Barat (Ibu Kota Mataram)</option>
                    <option value="Gorontalo (Ibu Kota Gorontalo)">Gorontalo (Ibu Kota Gorontalo)</option>
                    <option value="Sulawesi Barat (Ibu Kota Mamuju)">Sulawesi Barat (Ibu Kota Mamuju)</option>
                    <option value="Sulawesi Tengah (Ibu Kota Palu)">Sulawesi Tengah (Ibu Kota Palu)</option>
                    <option value="Sulawesi Utara (Ibu Kota Manado)">Sulawesi Utara (Ibu Kota Manado)</option>
                    <option value="Sulawesi Tenggara (Ibu Kota Kendari)">Sulawesi Tenggara (Ibu Kota Kendari)</option>
                    <option value="Sulawesi Selatan (Ibu Kota Makassar)">Sulawesi Selatan (Ibu Kota Makassar)</option>
                    <option value="Maluku Utara (Ibu Kota Sofifi)">Maluku Utara (Ibu Kota Sofifi)</option>
                    <option value="Maluku (Ibu Kota Ambon)">Maluku (Ibu Kota Ambon)</option>
                    <option value="Papua Barat (Ibu Kota Manokwari)">Papua Barat (Ibu Kota Manokwari)</option>
                    <option value="Papua (Ibu Kota Jayapura)">Papua (Ibu Kota Jayapura)</option>
                    <option value="Papua Tengah (Ibu Kota Nabire)">Papua Tengah (Ibu Kota Nabire)</option>
                    <option value="Papua Pegunungan (Ibu Kota Jayawijaya)">Papua Pegunungan (Ibu Kota Jayawijaya)</option>
                    <option value="Papua Selatan (Ibu Kota Merauke)">Papua Selatan (Ibu Kota Merauke)</option>
                    <option value="Papua Barat Daya (Ibu Kota Sorong)">Papua Barat Daya (Ibu Kota Sorong)</option>
                </select>
                <label for="lokasi">Lokasi</label>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jenis Kelamin:</label>
                <div class="form-check">
                    <input class="form-check-input" id="lakiLaki" type="radio" name="jenisKelamin" data-sb-validations="required" value="L"/>
                    <label class="form-check-label" for="lakiLaki">Laki-Laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="perempuan" type="radio" name="jenisKelamin" data-sb-validations="required" value="P"/>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="jenisKelamin:required">One option is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Skill:</label>
                <div class="form-check">
                    <input class="form-check-input" id="php" type="checkbox" name="skill" data-sb-validations="required" value="PHP"/>
                    <label class="form-check-label" for="php">PHP</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="mysql" type="checkbox" name="skill" data-sb-validations="required" value="Mysql"/>
                    <label class="form-check-label" for="mysql">Mysql</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="javascript" type="checkbox" name="skill" data-sb-validations="required" value="Javascript"/>
                    <label class="form-check-label" for="javascript">Javascript</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="html" type="checkbox" name="skill" data-sb-validations="required" value="HTML"/>
                    <label class="form-check-label" for="html">HTML</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="css" type="checkbox" name="skill" data-sb-validations="required" value="CSS"/>
                    <label class="form-check-label" for="css">CSS</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="skill:required">One option is required.</div>
            </div>
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
        </form>
        <div class="container">
            <h3 class="text-center">Hasil Inputan</h3>
            <table class="table">
                <thead class="table light">
                    <tr>
                        <th>Nama: </th>
                        <th>Email: </th>
                        <th>Lokasi: </th>
                        <th>Jenis Kelamin: </th>
                        <th>Skill: </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$data['nama']}}</td>
                        <td>{{$data['email']}}</td>
                        <td>{{$data['lokasi']}}</td>
                        <td>{{$data['jenisKelamin']}}</td>
                        @if(@isset($data))
                        <td>{{$data['skill']}}</td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
