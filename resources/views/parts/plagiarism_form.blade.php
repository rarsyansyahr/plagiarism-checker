<!-- ======= Plagiarism Form ======= -->
<section id="plagiarism" class="about">
    <form action="/plagiarism" method="POST" enctype="multipart/form-data" id="plagiarism-form">
        {{ csrf_field() }}

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Mari periksa dokumen Kamu</h2>
            </div>

            <div class="alert alert-danger alert-dismissible mb-3" role="alert" style="display: none;">
                <ul id="list-errors"></ul>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

            <div class="row content">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="document1" class="form-label">Pilih <b>Dokumen Pertama</b>*</label>
                        <input class="form-control" type="file" name="document1" id="document1" required>
                    </div>
                    <p>
                        <i><small>Pilih dokumen yang akan dibandingkan.</small></i>
                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <div class="mb-3">
                        <label for="document2" class="form-label">Pilih <b>Dokumen Kedua</b>*</label>
                        <input class="form-control" type="file" name="document2" id="document2" required>
                    </div>
                    <p>
                        <i><small>Dokumen kedua merupakan dokumen yang akan dibandingkan dengan dokumen pertama.</small></i>
                    </p>
                </div>
            </div>

            <div class="mt-4 col-lg-12 text-center">
                <button type="submit" name="btn-submit" id="btn-submit" class="btn btn-lg" style="background-color: #37517e; color: #ffffff">
                    <img src="assets/icon/search.svg" alt="Search Icon">&nbsp;
                    Analisa Plagiarism
                </button>
            </div>

        </div>

    </form>

    <div id="loading-plagiarism" style="display: none;">
        <div class="d-flex justify-content-center align-items-center">
            <div style="margin-right: 1rem;">
                <h3 class="text-primary">Sedang menganalisa ... </h3>
            </div>
            <div class="spinner-border text-primary" role="status">
            </div>
        </div>
    </div>
</section>
<!-- End Plagiarism Form Section -->