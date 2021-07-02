<!-- ======= Plagiarism Form ======= -->
<section id="plagiarism" class="about">
    <form action="/plagiarism" method="POST" enctype="multipart/form-data" id="plagiarism-form">
        {{ csrf_field() }}

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>PLAGIARISM CHECKER</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="document1" class="form-label">Pilih <b>Dokumen Pertama</b>*</label>
                        <input class="form-control" type="file" name="document1" id="document1" required>
                    </div>
                    <p>
                        Pilih dokumen yang akan dibandingkan.
                    </p>
                    <!-- <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                    </ul> -->
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <div class="mb-3">
                        <label for="document2" class="form-label">Pilih <b>Dokumen Kedua</b>*</label>
                        <input class="form-control" type="file" name="document2" id="document2" required>
                    </div>
                    <p>
                        Dokumen kedua merupakan dokumen yang akan dibandingkan dengan dokumen pertama.
                    </p>
                    <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
                </div>
            </div>

            <div class="mt-4 col-lg-12 text-center">
                <button type="submit" name="btn-submit" id="btn-submit" class="btn btn-lg" style="background-color: #37517e; color: #ffffff">
                    <img src="/assets/icon/search.svg" alt="Search Icon">&nbsp;
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