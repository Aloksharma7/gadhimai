<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>

    
<div class="container-fluid d-flex justify-content-center small-card py-3">
    <div class="card temples-card" style="width: 6.5rem;">
    <img src="<?= base_url('assets/image/temples/gadhimai-mandir.jpg') ?>" class="card-img-top" alt="..."/>
    <p>Gadhimai Mandir</p>
    </div>
    <div class="card temples-card" style="width: 6.5rem;">
    <img src="<?= base_url('assets/image/temples/hanuman-mandir.jpg') ?>" class="card-img-top" alt="..."/>
    <p>Hanuman Mandir</p>
    </div>
    <div class="card temples-card" style="width: 6.5rem;">
    <img src="<?= base_url('assets/image/temples/jorlahi-mata-mandir.jpeg') ?>" class="card-img-top" alt="..."/>
    <p>Jorlahi Mata Mandir</p>
    </div>
    <div class="card temples-card" style="width: 6.5rem;">
    <img src="<?= base_url('assets/image/temples/ramna-kamana-mai-mandir.jpg') ?>" class="card-img-top" alt="..."/>
    <p>Ramna Kamna Mai Mandir</p>
    </div>
    <div class="card temples-card" style="width: 6.5rem;">
    <img src="<?= base_url('assets/image/temples/sapahi-mai-mandir.jpeg') ?>" class="card-img-top" alt="..."/>
    <p>Sapahi Mai Mandir</p>
    </div>
    <div class="card temples-card" style="width: 6.5rem;">
    <img src="<?= base_url('assets/image/temples/hanuman-mandir.jpg') ?>" class="card-img-top" alt="..."/>
    <p>Hanuman Mandir</p>
    </div>
</div>

<div class="container-fluid">
<hr>

</div>

<div class="container-fluid">
    <img src=" <?= base_url("/assets/image/banner.webp") ?>" alt="Banner" width="100%">
</div>


<Section class="devotee-services container-fluid">

</Section>

<div class="development-project container-fluid d-flex justify-content-between my-3">

    <div class="details">
    <div class="container">
        <div class="my-2"> 
       <img src="/assets/image/left-arrow.svg" class="arrow" style="-webkit-transform: scaleX(-1);
  transform: scaleX(-1);" alt="">
       <img src="/assets/image/right-arrow.svg" class="arrow" alt="">


</div>

        <h2 class="heading my-2">Development <br/> Projects</h2>
        <p>Some kind of text here that helps to identify the content
            <br/> Some kind of text here that helps to identify the conten
            <br/>Some kind of text here that helps to identify the conten</p>

        <button class= "btn btn-primary">View More 

        <svg id="MDI_arrow-left-thin-circle-outline" data-name="MDI / arrow-left-thin-circle-outline" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
        <g id="Boundary" fill="#FFAF42" stroke="rgba(0,0,0,0)" stroke-width="1" opacity="0">
            <rect width="22" height="22" stroke="none"/>
            <rect x="0.5" y="0.5" width="21" height="21" fill="none"/>
        </g>
        <path id="Path_arrow-left-thin-circle-outline" data-name="Path / arrow-left-thin-circle-outline" d="M18.528,11.167a7.361,7.361,0,1,1-7.361-7.361,7.39,7.39,0,0,1,7.361,7.361m1.806,0a9.167,9.167,0,1,0-9.167,9.167,9.147,9.147,0,0,0,9.167-9.167m-7.755-.917V7.5l3.63,3.667-3.63,3.667v-2.75H6.125V10.25" transform="translate(-0.167 -0.167)" fill="#FFAF42"/>
        </svg>
    </button>
    </div>
    </div>

    <div class="card card-1" style="width: 18rem;">
    <img src="<?= base_url("/assets/image/god1.png") ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <h5 class="card-title">Card title</h5>
    </div>
    </div>

    <div class="card card-2" style="width: 18rem;">
    <img src=" <?= base_url("/assets/image/god1.png") ?> " class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <h5 class="card-title">Card title</h5>
    </div>
    </div>

    <div class="card card-3" style="width: 18rem;">
    <img src="<?= base_url("/assets/image/god1.png") ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <h5 class="card-title">Card title</h5>
    </div>
    </div>
</div>

<!-- photo gallery -->
<section class="photo-gallery">
            <h2 class="heading">Photo Gallery</h2>
            <img src="/assets/image/divider.svg" class="divider" >
           <!-- Gallery -->
            <div class="container-fluid"> 
           <table>
<tr>
<td  rowspan="2" class="col-md-6">
<img src="/assets/image/gallery/gadhi%20mai%20mandir.webp" alt="Main Photo">
</td>
<td class="col-md-3">
<img src="/assets/image/gallery/gadhi%20mai%20yag.webp" alt="Smaller Photo 1">
</td>
<td class="col-md-3">
<img src="/assets/image/gallery/gadhi%20mai%20yag.webp" alt="Smaller Photo 1">
</td>
</tr>
<tr>
<td class="col-md-3">
<img src="/assets/image/gallery/gadhi%20mai%20yag2.webp" alt="Smaller Photo 1">
</td>
<td class="col-md-3">
<img src="/assets/image/gallery/gadhi%20mai%20yag2.webp" alt="Smaller Photo 1">
</td>
</tr>

</table>

<table class="gallery-3">
<td class="col-md-3">
<img src="/assets/image/gallery/Gadhimai.webp" alt="Smaller Photo 1">
</td>
<td class="col-md-3">
<img src="/assets/image/gallery/Gadhimai%20temple%20puja.webp" alt="Smaller Photo 1">
</td>
<td class="col-md-3" >
<img src="/assets/image/gallery/Gadhimaitemple.jpg" alt="Smaller Photo 1" >
</td>
</table>
</div>
<!-- Gallery -->
<button class= "btn btn-primary" style="margin-top:7px;">View More <svg id="MDI_arrow-left-thin-circle-outline" data-name="MDI / arrow-left-thin-circle-outline" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
<g id="Boundary" fill="#FFAF42" stroke="rgba(0,0,0,0)" stroke-width="1" opacity="0">
    <rect width="22" height="22" stroke="none"/>
    <rect x="0.5" y="0.5" width="21" height="21" fill="none"/>
</g>
<path id="Path_arrow-left-thin-circle-outline" data-name="Path / arrow-left-thin-circle-outline" d="M18.528,11.167a7.361,7.361,0,1,1-7.361-7.361,7.39,7.39,0,0,1,7.361,7.361m1.806,0a9.167,9.167,0,1,0-9.167,9.167,9.147,9.147,0,0,0,9.167-9.167m-7.755-.917V7.5l3.63,3.667-3.63,3.667v-2.75H6.125V10.25" transform="translate(-0.167 -0.167)" fill="#FFAF42"/>
</svg>
</button>        
    </section>

  


    <section class="development-partner development-project container-fluid">
        <h2 class="heading"> Government of Madesh Pradesh - Endowment Department</h2>
        <img src="/assets/image/divider.svg" class="divider" >
        <div class="row card-row d-flex justify-content-evenly development-partner ">
    <div class="col-md-3 mb-3">
        <div class="card h-100">
            <img src="/assets/image/political/Upendra-Yadav-new-1-1024x1024.jpg.bv.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card h-100">
            <img src="/assets/image/political/Upendra-Yadav-new-1-1024x1024.jpg.bv.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Upendra Pd. Yadav</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card h-100">
            <img src="/assets/image/political/Upendra-Yadav-new-1-1024x1024.jpg.bv.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>

</section>



<?= $this->endSection() ?>