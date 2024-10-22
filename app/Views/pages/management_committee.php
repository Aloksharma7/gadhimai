<?= $this->extend('templates/layout') ?>
<?= $this->section('styles') ?>
<!-- Custom CSS for history page -->
<link rel="stylesheet" href="<?= base_url("assets/css/pages.css") ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- History of Gadhimai Temple Page -->
<section class="history-section container-fluid">
    <div class="container py-5">
    <div class=" mb-3">
         <img src="<?= base_url('assets/image/usables/mela-samiti.jpg') ?>" class="img-fluid img-responsive rounded featured-img" alt="Gadhimai Temple" />
    </div>
    <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block" />
    <?php if (session()->get('language') === 'ne'): ?>
        <h2 class="heading text-center">श्री गढीमाई पाँचवर्षीय मेला सञ्चालन तथा व्यवस्थापन मूल समिति</h2>
    <?php else: ?>
        <h2 class="heading ">Shree Gadhimai Five-Year Fair Operation and Management Main Committee</h2>
    <?php endif ?>



            <div class=" mb-3">
                <?php if (session()->get('language') === 'ne'): ?>
                    <p class="text-justify custom-text">
                    <p>
        नेपालको बारा जिल्लाको बरियारपुरमा प्रत्येक पाँच वर्षमा आयोजना हुने भव्य गढीमाई मेलाको सफल र सुसङ्गठित व्यवस्थापन गर्ने मुख्य उद्देश्यले <em>श्री गढीमाई पाँचवर्षीय मेला सञ्चालन तथा व्यवस्थापन मूल समिति</em> गठन गरिएको छ। धार्मिक र सांस्कृतिक हिसाबले अत्यन्त महत्वपूर्ण यस मेलामा नेपाल, भारत र एशियाका अन्य भागबाट लाखौँ भक्तजन तथा आगन्तुकहरू सहभागी हुने गर्दछन्। यस मेलाले गढीमाई देवीप्रतिको भक्ति र सयौँ वर्षदेखि चल्दै आएका परम्पराहरूको उत्सव मनाउँदै आएको छ जसले यस क्षेत्रको पहिचानलाई झल्काउँछ।
    </p>
    <p>
        महागढीमाई नगरपालिकाका नगरप्रमुख श्री उपेन्द्र प्रसाद यादवको नेतृत्वमा १११ सदस्यीय समिति गठन गरिएको छ। यस समितिले मेलाको हरेक पक्षको व्यवस्थापनको जिम्मेवारी लिएको छ। लजिस्टिक्स, सुरक्षा, भीड व्यवस्थापन, स्वास्थ्य तथा सुरक्षाका साथै मेलाको धार्मिक र सांस्कृतिक पवित्रताको संरक्षणको जिम्मा यस समितिले लिएको छ। मेलालाई शान्तिपूर्ण, व्यवस्थित र भव्य तरिकाले सम्पन्न गराउन समितिको उद्देश्य रहेको छ जसले मेलाको गरिमा कायम राख्दै आगन्तुकहरूलाई सार्थक र आध्यात्मिक अनुभव प्रदान गर्नेछ।
    </p>

    <h3>समितिका प्रमुख सदस्यहरू यस प्रकार छन्:</h3>
    <ul>
        <li><strong>अध्यक्ष</strong>: श्री उपेन्द्र प्रसाद यादव (नगरप्रमुख, महागढीमाई नगरपालिका)</li>
        <li><strong>उपाध्यक्षहरू</strong>: श्री मनोज कुमार गुप्ता, श्री रामचन्द्र प्रसाद साह, श्री रामबाबु प्रसाद यादव, श्री कलैश महतो</li>
        <li><strong>महासचिवहरू</strong>: श्री विरेन्द्र प्रसाद यादव, श्री नरेश प्रसाद जयसवाल, श्री उपेन्द्र प्रसाद गुप्ता</li>
        <li><strong>सचिवहरू</strong>: श्री उमरावती देवी लहेरीन, श्री नितु कुमारी गुप्ता</li>
        <li><strong>कोषाध्यक्ष</strong>: श्री विरेन्द्र प्रसाद चौरसिया</li>
    </ul>

    <p>
        यसका साथै, समितिमा नेपालका प्रमुख सबै राजनीतिक दलका प्रतिनिधिहरू र १६ नगरपालिका प्रमुख तथा उपप्रमुखहरू समेत छन्। यस समावेशी संरचनाले मेला सफलताका लागि व्यापक सहयोग र सहभागिता सुनिश्चित गर्दछ जसले गर्दा मेला हरेक दृष्टिकोणबाट सफल हुनेछ।
    </p>
    <p>
        समितिको प्रयास मेलालाई सभ्य र भव्य बनाउन केन्द्रित छ जसले गढीमाई महोत्सवको समृद्ध परम्पराहरूको सम्मान गर्दछ। उनीहरूको सामूहिक प्रयासले यस मेला यात्रु र आगन्तुकहरूलाई सुरक्षित, आध्यात्मिक र समृद्ध अनुभव प्रदान गर्नेछ।
    </p>

    <h4>जय गढीमाई!</h4>
                    </p>
                <?php else: ?>
                    <p class="text-justify custom-text">
                     <p>
        The Shree Gadhimai Five-Year Fair Operation and Management Main Committee has been formed with the primary objective of overseeing the smooth and successful organization of the grand Gadhimai Fair held every five years in Bariyarpur, Bara District, Nepal. This fair is of great religious and cultural significance, attracting millions of devotees and visitors from Nepal, India, and other parts of Asia.
    </p>
    <p>
        Under the leadership of <strong>Upendra Prasad Yadav</strong>, the Mayor of Gadhimai Municipality, a 111-member committee has been established to manage all aspects of the fair, including logistics, security, crowd control, health and safety, and the preservation of the event's religious and cultural sanctity. The committee aims to ensure that the fair is conducted in a peaceful, organized, and grand manner, maintaining its dignity while providing a meaningful experience for all attendees.
    </p>

    <h3>Key members of the committee:</h3>
    <ul>
        <li><strong>Chairman:</strong> Shri Upendra Prasad Yadav (Mayor, Gadhimai Municipality)</li>
        <li><strong>Vice-chairman:</strong> Shri Manoj Kumar Gupta</li>
        <li><strong>Vice-chairman:</strong> Shri Ramchandra Prasad Sah</li>
        <li><strong>Vice-chairman:</strong> Shri Rambabu Prasad Yadav</li>
        <li><strong>Vice-chairman:</strong> Shri Kalaish Mahato</li>
        <li><strong>General Secretary:</strong> Shri Birendra Prasad Yadav</li>
        <li><strong>General Secretary:</strong> Shri Naresh Prasad Jaiswal</li>
        <li><strong>General Secretary:</strong> Shri Upendra Prasad Gupta</li>
        <li><strong>Secretary:</strong> Shri Umarawati Devi Laherin</li>
        <li><strong>Secretary:</strong> Shri Nitu Kumari Gupta</li>
        <li><strong>Treasurer:</strong> Shri Birendra Prasad Chaurasiya</li>
    </ul>

    <p>
        Additionally, the committee includes representatives from all major political parties in Nepal, as well as the chiefs and deputy chiefs of 16 municipalities. This collaborative approach ensures that the fair is not only well-organized but also has the involvement and support of a wide range of stakeholders.
    </p>
    <p>
        The committee's collective efforts will focus on ensuring that the Gadhimai Fair is civilized (savya) and grand (bhavya), honoring its rich traditions and providing a safe, spiritual, and enriching experience for pilgrims and visitors alike.
    </p>

    <h4>Jai Gadhimai!</h4>
                    </p>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>