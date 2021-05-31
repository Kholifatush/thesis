@extends('geometrys.layout') @section('header')
<section id="hero" class="d-flex align-items-center">
  <div
    class="container position-relative"
    data-aos="fade-up"
    data-aos-delay="100"
  >
    <a href="/geometri" class="btn btn-primary mb-3" align="center">Kembali</a>
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-9 text-center">
        <h1>Persegi Panjang</h1>
        <h2>
          Persegi panjang adalah bangun datar 2 dimensi yang mempunyai 2 pasang
          sisi sejajar yang sama Panjang dan mempunyai 4 titik sudut siku-siku.
        </h2>
      </div>
    </div>
  </div>
</section>
@endsection @section('content')
<main id="main">
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <div class="row">
          <div class="col-sm">
            <strong>Rumus:</strong><br />
            <i>luas (L) = panjang (p) x lebar (l)</i><br />
            <i>keliling (k) = 2 x (panjang + lebar)</i>
          </div>
          <div class="col-sm">
            <strong>Keterangan: </strong><br />
            <i>
              p = panjang <br />
              l = lebar
            </i>
          </div>
        </div>
      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="Panjang"
              id="p"
              placeholder="Panjang"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              class="form-control"
              name="Lebar"
              id="l"
              placeholder="Lebar"
            />
          </div>
          <div class="row d-flex justify-content-center">
                <div class="text-center mr-4">
                  <button onclick="hitung()" class="btn btn-primary">
                    Hitung
                  </button>
                </div>
                <div class="text-center">
                  <button onclick="hapus()" class="btn btn-danger">
                    Hapus
                  </button>
                </div>
              </div>
          <div class="form-row d-flex justify-content-center">
            <div class="col-lg-4">
              <div class="info">
                <div class="email">
                  <i class="icofont-calculator-alt-2"></i>
                  <h4>Keliling</h4>
                  <p id="keliling"></p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="info">
                <div class="email">
                  <i class="icofont-calculator-alt-2"></i>
                  <h4>Luas</h4>
                  <p id="luas"></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info">
                <div class="email">
                  <i class="icofont-calculator-alt-2"></i>
                  <h4>Hasil</h4>
                  <p id="hasil"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
</main>
<script type="text/javascript">
  var panjang = document.getElementById("p");
  var lebar = document.getElementById("l");
  var luas = document.getElementById("luas");
  var keliling = document.getElementById("keliling");
  var hasil = document.getElementById("hasil");

  function hitung() {
    luas.textContent = Number(panjang.value) * Number(lebar.value);
    keliling.textContent = 2 * (Number(panjang.value) + Number(lebar.value));
    hasil.innerHTML=
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br>panjang (p): " + panjang.value +
			"<br>lebar (l): " + lebar.value +
			"<br><u>luas (L):</u>" +
			"<br>L = p x l" +
			"<br>L = " + panjang.value + " x " + lebar.value +
			"<br>L= " + luas.textContent +
			"<br><u>keliling (K):</u>" +
			"<br>K = 2 x (p + l)" +
			"<br>K = 2 x (" + panjang.value + " + " + lebar.value + ")" +
			"<br>K = 2 x (" + (Number(panjang.value) + Number(lebar.value)) + ")" +
			"<br>K = " + keliling.textContent 
			if (panjang.value != "" && lebar.value != "" && panjang.value > 0 && lebar.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				panjang.value = ""
				lebar.value = ""
				luas.textContent = ""
				keliling.textContent = ""
				hasil.innerHTML = ""
			}
  }
  function hapus() {
			panjang.value = ""
			lebar.value = ""
			luas.textContent = ""
			keliling.textContent = ""
			hasil.innerHTML = ""
		}
</script>
@endsection
