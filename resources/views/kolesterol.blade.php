<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colesterol check up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container px-5 my-5">
        <h1 class="text-center">Form Data diri Pemeriksaan Kolesterol</h1>
        <h6 class="text-center">Kampung Durian Runtuh, Kecamatan Pasirangin, Kabupaten bogor</h6><hr><br>
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="mb-3">
                <label class="form-label" for="nama">Nama</label>
                <input class="form-control" id="nama" type="text" placeholder="Nama" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="tanggalPemeriksaan">Tanggal pemeriksaan</label>
                <input class="form-control" id="tanggalPemeriksaan" type="date" placeholder="Tanggal pemeriksaan" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="tanggalPemeriksaan:required">Tanggal pemeriksaan is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="tanggalLahirUsia">Tanggal lahir/Usia</label>
                <input class="form-control" id="tanggalLahirUsia" type="text" placeholder="Tanggal lahir/Usia" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="tanggalLahirUsia:required">Tanggal lahir/Usia is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" id="lakiLaki" type="radio" name="jenisKelamin" data-sb-validations="" />
                    <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="perempuan" type="radio" name="jenisKelamin" data-sb-validations="" />
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="container px-4 my-5">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Jenis Tes</th>
                        <th scope="col">Hasil Pemeriksaan</th>
                        <th scope="col">Normal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tekanan Darah</td>
                        <td>-</td>
                        <td>120/80 mmhg</td>
                      </tr>
                      <tr>
                        <td>Asam urat</td>
                        <td>-</td>
                        <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
                      </tr>
                      <tr>
                        <td >Kolesterol total</td>
                        <td>-</td>
                        <td>200 mg/dl </td>
                      </tr>
                      <tr>
                        <td rowspan="3">Gula darah </td>
                        <td>-</td>
                        <td>Puasa: 70-110 mg/dl</td>
                      </tr>
                      <tr>
                        <td>-</td>
                        <td> 2 jam setelah makan: 100-150 mg/dl</td>
                      </tr>
                      <TR>
                        <TD>-</TD>
                        <td>Sewaktu/acak : 70-125 mg/dl</td>
                      </TR>
                    </tbody>
                  </table>
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
            <div class="d-grid">
                <button type="button" class="btn btn-primary" onclick="myfunction()">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        function myfunction() {
            let txt;
            if(confirm("Press a button!")){
                txt= "Data terkirim";
            }else{
                txt="";
            }
        }
    </script>
  </body>
</html>
