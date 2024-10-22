<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid d-flex justify-content-center small-card py-3">
  <div class="card temples-card" style="width: 6.5rem">
    <img
      src="<?= base_url('assets/image/temples/gadhimai-mandir.jpg') ?>"
      class="card-img-top"
      alt="..."
    />
    <?php if (session()->get('language') === 'ne'): ?>
      <p>गढीमाई मन्दिर</p>
      <?php else: ?>
    <p>Gadhimai Temple</p>
    <?php endif; ?>
  </div>
  <div class="card temples-card" style="width: 6.5rem">
    <img
      src="<?= base_url('assets/image/temples/sarwasati-mata.jpg') ?>"
      class="card-img-top"
      alt="..."
    />
    <?php if (session()->get('language') === 'ne'): ?>
      <p>सर्वसती मन्दिर</p>
      <?php else: ?>
    <p>Sarwasati Temple</p>
    <?php endif; ?>
  </div>
  <div class="card temples-card" style="width: 6.5rem">
    <img
      src="<?= base_url('assets/image/temples/hanuman-mandir.jpg') ?>"
      class="card-img-top"
      alt="..."
    />
    <?php if (session()->get('language') === 'ne'): ?>
      <p>हनुमान मन्दिर</p>
      <?php else: ?>
    <p>Hanuman Temple</p>
    <?php endif; ?>
  </div>
  <div class="card temples-card" style="width: 6.5rem">
    <img
      src="<?= base_url('assets/image/temples/kartik-ganesh.jpg') ?>"
      class="card-img-top"
      alt="..."
    />
    <?php if (session()->get('language') === 'ne'): ?>
      <p>कार्तिक गणेश मन्दिर</p>
      <?php else: ?>
      <p>Kartik Ganesh Temple</p>
    <?php endif; ?>
  </div>
  <div class="card temples-card" style="width: 6.5rem">
    <img
      src="<?= base_url('assets/image/temples/jorlahi-mata-mandir.jpeg') ?>"
      class="card-img-top"
      alt="..."
    />
    <?php if (session()->get('language') === 'ne'): ?>
      <p>जोरलाही माता मन्दिर</p>
      <?php else: ?>
    <p>Jorlahi Mata Temple</p>
    <?php endif; ?>
  </div>
  <div class="card temples-card" style="width: 6.5rem">
    <img
      src="<?= base_url('assets/image/temples/ganesh-mandir.jpg') ?>"
      class="card-img-top"
      alt="..."
    />
    <?php if (session()->get('language') === 'ne'): ?>
      <p>गणेश मन्दिर</p>
      <?php else: ?>
    <p>Ganesh Temple</p>
    <?php endif; ?>
  </div>
  <div class="card temples-card" style="width: 6.5rem">
    <img
      src="<?= base_url('assets/image/temples/ramna-kamana-mai-mandir.jpg') ?>"
      class="card-img-top"
      alt="..."
    />
    <?php if (session()->get('language') === 'ne'): ?>
      <p>रामना कामना माई मन्दिर</p>
      <?php else: ?>
    <p>Ramna Kamna Mai Temple</p>
    <?php endif; ?>
  </div>
  <div class="card temples-card" style="width: 6.5rem">
    <img
      src="<?= base_url('assets/image/temples/shiv-mandir.jpg') ?>"
      class="card-img-top"
      alt="..."
    />
    <?php if (session()->get('language') === 'ne'): ?>
      <p>शिव मन्दिर</p>
      <?php else: ?>
    <p>Shiv Temple</p>
    <?php endif; ?>
  </div>
  <div class="card temples-card" style="width: 6.5rem">
    <img
      src="<?= base_url('assets/image/temples/parbati-mandir.jpg') ?>"
      class="card-img-top"
      alt="..."
    />
    <?php if (session()->get('language') === 'ne'): ?>
      <p>पार्वती मन्दिर</p>
      <?php else: ?>
    <p>Parbati Temple</p>
    <?php endif; ?>
  </div>
  <div class="card temples-card" style="width: 6.5rem">
    <img
      src="<?= base_url('assets/image/temples/sapahi-mai-mandir.jpeg') ?>"
      class="card-img-top"
      alt="..."
    />
    <?php if (session()->get('language') === 'ne'): ?>
      <p>सापही माई मन्दिर</p>
      <?php else: ?>
    <p>Sapahi Mai Temple</p>
    <?php endif; ?>
  </div>
</div>

<div class="container-fluid">
  <hr />
</div>

 <!-- crousel, banner code  -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ($carouselItems as $index => $item): ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                <img src="<?= esc($item['image_url']) ?>" class="d-block w-100" alt="<?= esc($item['title']) ?>">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5><?// esc($item['title']) ?></h5> -->
                    <!-- <p><?// esc($item['description']) ?></p> -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- gadhimai mantar banner  -->
 <section class=" my-5">
   <?php if (session()->get('language') === 'ne'): ?>
    <h2 class="heading text-center">गढीमाई मूल मन्त्र</h2>
    <?php else: ?>
      <h2 class="heading text-center">Gadhimai Mul Mantra</h2> 
<?php endif ?>
<img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block" />

 <div class="mantar-banner d-flex justify-content-center">
  <img src="assets/image/banner.webp" alt="Gadhimai Mantar Banner">
 </div>
 </section>

 <!-- devotee services  -->
<Section class="devotee-services container-fluid">
  <br>
  <?php if (session()->get('language') === 'ne'): ?>
    <h2 class="heading text-center">भक्त सेवा</h2>
    <?php else: ?>
      <h2 class="heading text-center">Devotee Services</h2>
<?php endif ?>
<img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block" />

<div class="container py-5 d-block ">
  <div class="row gap-4 justify-content-evenly">
        <div class="card" style="width: 18rem; justify-content: center;">
              <img src="/assets/image/seva-devotee.svg" class="card-img-center card-devotee"  alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Seva</h5>
                  <p class="card-text">Connect and perform Seva/Abhishekam/Homam, etc from anywhere using Paroksha Seva.</p>
                  <a class="btn btn-primary">Vist Now</a>
              </div>
          </div>

          <div class="card" style="width: 18rem; justify-content: center;">
              <img src="/assets/image/donate.png" class="card-img-center card-devotee"  alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Donate</h5>
                  <p class="card-text">Connect and perform Seva/Abhishekam/Homam, etc from anywhere using Paroksha Seva.</p>
                  <a class="btn btn-primary">Vist Now</a>
              </div>
          </div>

          <div class="card" style="width: 18rem; justify-content: center;">
              <img src="/assets/image/accommodation.svg" class="card-img-center card-devotee"  alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Accommondation</h5>
                  <p class="card-text">Connect and perform Seva/Abhishekam/Homam, etc from anywhere using Paroksha Seva.</p>
                  <a class="btn btn-primary">Vist Now</a>
              </div>
          </div>

          <div class="card" style="width: 18rem; justify-content: center;">
              <img src="/assets/image/templeicon.png" class="card-img-center card-devotee"  alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Temple</h5>
                  <p class="card-text">Connect and perform Seva/Abhishekam/Homam, etc from anywhere using Paroksha Seva.</p>
                  <a class="btn btn-primary">Vist Now</a>
              </div>
          </div>

          


  </div>
</div>
</Section>

<!-- development projects  -->
<div class="development-project container-fluid d-flex justify-content-lg-between justify-content-center flex-wrap-reverse my-3">
    <div class="details">
        <div class="container">
            <div class="my-2">
                <img src="/assets/image/left-arrow.svg" class="arrow left-arrow" style="-webkit-transform: scaleX(-1); transform: scaleX(-1)" alt="" />
                <img src="/assets/image/right-arrow.svg" class="arrow right-arrow" alt="" />
            </div>

            <?php if (session()->get('language') === 'ne'): ?>
              <h2 class="heading">धार्मिक स्थल र अनुष्ठान</h2>
              <p> गढीमाई परिसरमा हुने परम्परा तथा धार्मिक अनुष्ठान बोकेका यस्तालहरू </p>
              <?php else: ?>
                <h2 class="heading my-2"> Religious places & <br /> Rituals </h2>
                <p> Rituals and traditions held at Gadhimai premises</br> with religious significance</p>
            <?php endif ?>

            <button class="btn btn-primary">
                <?= lang('General.view_more'); ?>

                <svg id="MDI_arrow-left-thin-circle-outline" data-name="MDI / arrow-left-thin-circle-outline" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                    <g id="Boundary" fill="#FFAF42" stroke="rgba(0,0,0,0)" stroke-width="1" opacity="0">
                        <rect width="22" height="22" stroke="none" />
                        <rect x="0.5" y="0.5" width="21" height="21" fill="none" />
                    </g>
                    <path id="Path_arrow-left-thin-circle-outline" data-name="Path / arrow-left-thin-circle-outline" d="M18.528,11.167a7.361,7.361,0,1,1-7.361-7.361,7.39,7.39,0,0,1,7.361,7.361m1.806,0a9.167,9.167,0,1,0-9.167,9.167,9.147,9.147,0,0,0,9.167-9.167m-7.755-.917V7.5l3.63,3.667-3.63,3.667v-2.75H6.125V10.25" transform="translate(-0.167 -0.167)" fill="#FFAF42" />
                </svg>
            </button>
        </div>
    </div>

    <div class="card-wrapper d-flex gap-3">
        <?php foreach ($blogs as $index => $blog): ?>
            <div class="card development-card" style="width: 18rem; display: <?= ($index < 3) ? 'block' : 'none'; ?>">
                <img src="<?= $blog['img_url'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <?php if (session()->get('language') === 'ne'): ?>
                  <p class="card-text"><?= $blog['post_content_nepali'] ?></p>
                  <h5 class="card-title"><?= $blog['post_title_nepali'] ?></h5>
                  <?php else: ?>
                    <p class="card-text"><?= $blog['post_content'] ?></p>
                    <h5 class="card-title"><?= $blog['post_title'] ?></h5>
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- photo gallery -->
<section class="photo-gallery">
  <?php if (session()->get('language') === 'ne'): ?>
    <h2 class="heading text-center">फोटो ग्यालेरी</h2>
    <?php else: ?>
      <h2 class="heading">Photo Gallery</h2>
<?php endif ?>
  <img src="/assets/image/divider.svg" class="divider" />
  <!-- Gallery -->
  <div class="container-fluid project-img">
    <table>
      <tr>
        <td rowspan="2" class="col-md-6">
          <img
            src="/assets/image/gallery/devotees1.webp"
            alt="Main Photo"
          />
        </td>
        <td class="col-md-3">
          <img
            src="/assets/image/gallery/devotees2.webp"
            alt="Smaller Photo 1"
          />
        </td>
        <td class="col-md-3">
          <img
            src="/assets/image/gallery/festival1.webp"
            alt="Smaller Photo 1"
          />
        </td>
      </tr>
      <tr>
        <td class="col-md-3">
          <img
            src="/assets/image/gallery/festival2.webp"
            alt="Smaller Photo 1"
          />
        </td>
        <td class="col-md-3">
          <img
            src="/assets/image/gallery/temple1.webp"
            alt="Smaller Photo 1"
          />
        </td>
      </tr>
    </table>

    <table class="gallery-3">
      <td class="col-md-3">
        <img src="/assets/image/gallery/Gadhimai.webp" alt="Smaller Photo 1" />
      </td>
      <td class="col-md-3">
        <img
          src="/assets/image/gallery/temple2.webp"
          alt="Smaller Photo 1"
        />
      </td>
      <td class="col-md-3">
        <img
          src="/assets/image/gallery/Gadhimaitemple.jpg"
          alt="Smaller Photo 1"
        />
      </td>
    </table>
  </div>
  <!-- Gallery -->
  <a href= " <?= base_url("gallery") ?> ">
  <button class="btn btn-primary" style="margin-top: 7px">
     <?= lang('General.view_more'); ?> 
    <svg
      id="MDI_arrow-left-thin-circle-outline"
      data-name="MDI / arrow-left-thin-circle-outline"
      xmlns="http://www.w3.org/2000/svg"
      width="22"
      height="22"
      viewBox="0 0 22 22"
    >
      <g
        id="Boundary"
        fill="#FFAF42"
        stroke="rgba(0,0,0,0)"
        stroke-width="1"
        opacity="0"
      >
        <rect width="22" height="22" stroke="none" />
        <rect x="0.5" y="0.5" width="21" height="21" fill="none" />
      </g>
      <path
        id="Path_arrow-left-thin-circle-outline"
        data-name="Path / arrow-left-thin-circle-outline"
        d="M18.528,11.167a7.361,7.361,0,1,1-7.361-7.361,7.39,7.39,0,0,1,7.361,7.361m1.806,0a9.167,9.167,0,1,0-9.167,9.167,9.147,9.147,0,0,0,9.167-9.167m-7.755-.917V7.5l3.63,3.667-3.63,3.667v-2.75H6.125V10.25"
        transform="translate(-0.167 -0.167)"
        fill="#FFAF42"
      />
    </svg>
  </button>
  </a>
</section>

<!-- key peoples  -->
<section class="development-partner development-project container-fluid">
  <?php if (session()->get('language') === 'ne'): ?>
    <h2 class="heading text-center">गढीमाई मन्दिर सञ्चालन तथा व्यवस्थापन निकायहरू</h2>
    <?php else: ?>
      <h2 class="heading">Gadhimai Temple Operational & Management Bodies</h2>
<?php endif ?>
  <img src="/assets/image/divider.svg" class="divider" />
  <div class="row card-row d-flex justify-content-evenly development-partner">
    <div class="col-md-3 mb-3" style="width: 18rem;" >
      <div class="card h-100">
        <img
          src="/assets/image/usables/mela-samiti.jpg"
          class="card-img-top"
          alt="..."
        />
        <div class="card-body">
          <?php if (session()->get('language') === 'ne'): ?>
          <h5 class="card-title samiti">श्री गढीमाई पञ्चवर्षीय मेला</br> सञ्चालन तथा व्यवस्थापन मूल समिति</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <?php else: ?>
            <h5 class="card-title samiti">Shree Gadhimai five Year Fair Operation & Manage-ment Main Committee</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </p>
          <?php endif ?>
          <a href="<?= base_url('/management-committee') ?>" class="btn btn-outline-primary mt-1">Read More</a>
        </div>
      </div>
    </div>

    

    <div class="col-md-3 mb-3 " style="width: 18rem;">
      <div class="card h-100">
        <img
          src="/assets/image/political/Upendra-Yadav-new-1-1024x1024.jpg.bv.webp"
          class="card-img-top"
          alt="..."
        />
        <div class="card-body">
          <?php if (session()->get('language') === 'ne'): ?>
          <h5 class="card-title samiti">उपेन्द्र प्रसाद यादव</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <?php else: ?> 
          <h5 class="card-title samiti">Upendra Prasad Yadav</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <?php endif ?>
          <a href="<?= base_url('/management-committee') ?>" class="btn btn-outline-primary mt-1">Read More</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3 " style="width: 18rem;">
      <div class="card h-100">
        <img
          src="/assets/image/gadhimai-mandir.jpg"
          class="card-img-top"
          alt="..."
        />
        <div class="card-body">
        <?php if (session()->get('language') === 'ne'): ?>
          <h5 class="card-title samiti">श्री गढीमाई मन्दिर सञ्चालन </br>तथा विकास समिति</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <?php else: ?>
          <h5 class="card-title samiti">Shree Gadhimai Temple Operation & Developme-nt Committee</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <?php endif ?>
          <a href="<?= base_url('/development-committee') ?>" class="btn btn-outline-primary mt-1">Read More</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3" style="width: 18rem;">
      <div class="card h-100">
        <img
          src="/assets/image/political/ramchandra-sah.jpg"
          class="card-img-top"
          alt="..."
        />
        <div class="card-body">
        <?php if (session()->get('language') === 'ne'): ?>
          <h5 class="card-title samiti">रामचन्द्र साह</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <?php else: ?>
          <h5 class="card-title samiti">Ramchandra Sah</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <?php endif ?>
          <a href="<?= base_url('/development-committee') ?>" class="btn btn-outline-primary mt-1">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Event calendar code -->
<div class="container-fluid py-5">
  <?php if (session()->get('language') === 'ne'): ?>
    <h2 class="heading text-center">आगामी घटनाक्रम</h2>
    <?php else: ?>
      <h2 class="text-center mb-4 heading">Upcoming Events</h2>
<?php endif ?>
    <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block mb-4" />

    <div class="row">
        <?php if (!empty($events)): ?>
            <?php foreach ($events as $event): ?>
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow d-flex flex-row p-2">
                        <div class="event-date flex-shrink-0 text-center d-flex flex-column align-items-center justify-content-center">
                            <div class="day"><?= date('d', strtotime($event['event_date'])) ?></div>
                            <div class="month"><?= date('F', strtotime($event['event_date'])) ?></div>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title"><?= esc($event['event_title']) ?></h5>
                            <p class="card-text"><?= esc($event['event_description']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center">
                <p>No upcoming events found.</p>
            </div>
        <?php endif; ?>
    </div>
</div>



<!-- Youtube Videos Section -->
<section class="youtube-video py-5 ">
    <div class="container">
      <?php if (session()->get('language') === 'ne'): ?>
        <h2 class="heading text-center">गढीमाई मूल मन्त्र</h2>
        <?php else: ?>
          <h2 class="text-center mb-4">Watch Our Latest Video</h2>
<?php endif ?>
        <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block mb-5" />

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/ERm7Gk2Qzc8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Gadhimai Location Section -->
<div class="container py-5">
  <?php if (session()->get('language') === 'ne'): ?>
    <h2 class="heading text-center">गढीमाई मन्दिर स्थान</h2>
    <?php else: ?>
      <h2 class="text-center mb-4 heading">Gadhimai Temple Location</h2>
<?php endif ?>
    <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block mb-4" />

    <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
    <div class="card h-100 shadow">
        <div class="card-body">
            <h5 class="card-title">Find Us on the Map</h5>
            <div class="map-responsive">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3568.430971146381!2d85.04519311503889!3d26.993598083201328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399336c3b714cdfd%3A0x2fa6b1579023a216!2sGadhimai%20Temple!5e0!3m2!1sen!2snp!4v1697798233473!5m2!1sen!2snp&t=p"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>


        <!-- Information Column -->
        <div class="col-lg-4 mb-4">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">Temple Information</h5>
                    <p class="card-text">Gadhimai Temple is located in Bara District, Nepal. It is a renowned Hindu temple dedicated to the goddess Gadhimai.</p>
                    <ul class="list-unstyled">
                        <li><strong>Address:</strong> Bariyarpur, Bara, Nepal</li>
                        <li><strong>Phone:</strong> +977-123-456789</li>
                        <li><strong>Email:</strong> info@gadhimaitemple.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
