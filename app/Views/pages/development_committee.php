<?= $this->extend('templates/layout') ?>
<?= $this->section('styles') ?>
<!-- Custom CSS for history page -->
<link rel="stylesheet" href="<?= base_url("assets/css/pages.css") ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- History of Gadhimai Temple Page -->
<section class="history-section container-fluid">
    <div class="container py-5">
    <div class=" mb-3 ">
         <img src="<?= base_url('assets/image/history/gadhimai-temple.jpg') ?>" class="img-fluid img-responsive rounded featured-img" alt="Gadhimai Temple" />
    </div>
    <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block" />
    <?php if (session()->get('language') === 'ne'): ?>
        <h2 class="heading text-center">श्री गढीमाई मन्दिर सञ्चालन तथा विकास समिति</h2>
    <?php else: ?>
        <h2 class="heading ">Shree Gadhimai Temple Operation and Development Committee</h2>
    <?php endif ?>



            <div class=" mb-3">
                <?php if (session()->get('language') === 'ne'): ?>
                    <p class="text-justify custom-text">
                    <p>
        वि.सं. २०६० मा स्थापित <em>श्री गढीमाई मन्दिर सञ्चालन तथा विकास समिति</em>ले लगातार रूपमा गढीमाई मन्दिरको समग्र विकासका लागि काम गर्दै आएको छ। विशेषगरी <strong>गढीमाई मेला</strong>का कारण विश्वभर प्रख्यात यो मन्दिर नेपालकै प्रसिद्ध धार्मिक स्थलहरूमध्ये एक हो। समितिको मुख्य उद्देश्य मन्दिरको धार्मिक, सांस्कृतिक, र भौतिक विकास गर्दै यसलाई अझ समृद्ध र व्यवस्थित बनाउनु हो।
    </p>
    <p>
        यस समितिले गढीमाई मन्दिरको <strong>सञ्चालन</strong> र <strong>रखरखाव</strong> गर्ने सम्पूर्ण जिम्मेवारी पाएको छ। मन्दिरको <strong>व्यवस्थापन</strong>, <strong>धार्मिक गतिविधिहरूको आयोजना</strong>, <strong>संरचना विस्तार</strong>, तथा <strong>संरक्षण</strong> गर्ने काम यस समितिले गर्दै आइरहेको छ। मन्दिर परिसरमा आउने भक्तजनहरूको सुविधाको व्यवस्था, मन्दिरको भौतिक पूर्वाधार सुधार, र यसलाई अझ व्यवस्थित र आकर्षक बनाउने कार्यहरूमा समिति निरन्तर सक्रिय रहेको छ।
    </p>
    <p>
        समितिको नेतृत्व <strong>रामचन्द्र साह</strong>ले गरिरहेका छन्, जो यसका अध्यक्ष हुन्। उनको नेतृत्वमा समितिले मन्दिरको विकासका विभिन्न परियोजनाहरू कार्यान्वयन गर्दै आइरहेको छ। मन्दिरलाई धार्मिक र सांस्कृतिक पर्यटनको केन्द्रबिन्दु बनाउँदै स्थानीय तथा अन्तर्राष्ट्रिय भक्तजनलाई आकर्षित गर्ने योजनाहरूको कार्यान्वयनमा समिति अग्रसर छ।
    </p>
    <p>
        यस समितिले <em>गढीमाई मन्दिर</em>को ऐतिहासिक महत्त्वलाई कायम राख्दै यसलाई दीर्घकालसम्म समृद्ध र संगठित रूपमा संचालन गर्ने दिशामा निरन्तर क्रियाशील छ।
    </p>
    
    <h3>सरल भाषामा:</h3>
    <p>
        वि.सं. २०६० देखि गढीमाई मन्दिरलाई राम्रो बनाउन र चलाउनका लागि एउटा समिति बनेको छ। यो समितिले मन्दिरलाई सफा राख्छ, धार्मिक कामहरू गर्छ, मन्दिरलाई ठूलो र राम्रो बनाउँछ, र त्यहाँ आउने मानिसहरूलाई राम्रो सुविधा दिन्छ। यो समितिले मन्दिरलाई अझै धेरै राम्रो बनाउने र धेरै मानिसलाई यहाँ ल्याउने काम गरिरहेको छ।
    </p>

    <h3>मुख्य कुराहरू:</h3>
    <ul>
        <li><em>श्री गढीमाई मन्दिर सञ्चालन तथा विकास समिति</em>ले गढीमाई मन्दिरलाई राम्रो बनाउने काम गर्छ।</li>
        <li>यो समितिले मन्दिरको हेरचाह, धार्मिक कामहरू, मन्दिरलाई ठूलो बनाउने काम गर्छ।</li>
        <li>समितिले मन्दिरमा आउने मानिसहरूलाई राम्रो सुविधा दिन्छ।</li>
        <li>समितिको अध्यक्ष रामचन्द्र साह हुन्।</li>
        <li>समितिले मन्दिरलाई धार्मिक पर्यटनको ठाउँ बनाउन चाहन्छ।</li>
    </ul>

    <h3>अझै सरल भाषामा:</h3>
    <p>
        गढीमाई मन्दिरलाई राम्रो बनाउन र चलाउनका लागि एउटा समिति बनेको छ। यो समितिले मन्दिरलाई सफा राख्छ, मन्दिरलाई राम्रो बनाउँछ र मन्दिरमा आउने मानिसहरूलाई खुशी राख्छ।
    </p>
                    </p>
                <?php else: ?>
                    <p>
        The <em>Shree Gadhimai Temple Operation and Development Committee</em> was established in 2060 B.S. and has been continuously working for the overall development of the Gadhimai Temple. This temple is one of Nepal's most renowned religious sites, especially known for the <em>Gadhimai Fair</em>, which is famous worldwide. The committee's primary goal is to promote the temple’s religious, cultural, and physical development, making it more prosperous and well-organized.
    </p>
    <p>
        The committee holds the full <strong>authority</strong> to operate and maintain the Gadhimai Temple. It is responsible for the <strong>management</strong> of the temple, the <strong>organization of religious activities</strong>, <strong>expansion of infrastructure</strong>, and the <strong>preservation</strong> of the temple's heritage. The committee also ensures the convenience of pilgrims, focuses on improving the temple's physical infrastructure, and works to make it more organized and attractive.
    </p>
    <p>
        The committee is chaired by <strong>Ramchandra Sah</strong>, who leads the efforts towards the temple's continuous development. Under his leadership, the committee has implemented various projects aimed at improving the temple. The committee is committed to making the temple a center of religious and cultural tourism, attracting both local and international devotees.
    </p>
    <p>
        The <em>Shree Gadhimai Temple Operation and Development Committee</em> remains dedicated to preserving the temple's historical significance while ensuring its long-term prosperity and efficient management.
    </p>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>