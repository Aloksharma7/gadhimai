<?= $this->extend('templates/layout') ?>
<?= $this->section('styles') ?>
<!-- Custom CSS for history page -->
<link rel="stylesheet" href="<?= base_url("assets/css/history.css") ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- History of Gadhimai Temple Page -->
<section class="history-section container-fluid">
    <div class="container py-5">
    <?php if (session()->get('language') === 'ne'): ?>
        <h2 class="heading text-center">गढीमाई मन्दिरको इतिहास</h2>
    <?php else: ?>
        <h2 class="heading text-center">History of Gadhimai Temple</h2>
    <?php endif ?>
        <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block" />

        <div class="row">
            <div class="col-md-6 mb-3">
                <?php if (session()->get('language') === 'ne'): ?>
                    <p class="text-justify custom-text">
                        गढीमाई मन्दिर बारा जिल्लाको बरियारपुर, महागढीमाई नगरपालिकामा अवस्थित छ। यो मन्दिर ऐतिहासिक र सांस्कृतिक रूपमा महत्वपूर्ण छ, विशेष गरी गढीमाई मेलाको कारणले, जुन विश्वको सबैभन्दा ठूलो पशु बलि दिने कार्यक्रमहरू मध्ये एक हो। मन्दिरको उत्पत्ति लगभग ३०० वर्ष पहिले मन्दिरका संस्थापक भगवान चौधरीको जीवनको एक महत्वपूर्ण समयमा भएको थियो। किंवदन्ती अनुसार, चौधरीले एक सपना देखे, जसमा देवी गढीमाईले उनलाई जेलबाट मुक्त गर्न, उनलाई दुष्टबाट बचाउन र उनलाई समृद्धि र शक्ति दिने बदलामा बलिदानको रूपमा रगत मागे। सुरुमा देवीले मानव बलिदान मागे तर चौधरीले सफलतापूर्वक पशु बलिदान गरे, यसरी एक परम्परा स्थापित गरे जुन प्रत्येक पाँच वर्षमा जारी छ।
                    </p>
                <?php else: ?>
                    <p class="text-justify custom-text">
                        The Gadhimai Temple, located in Bariyarpur, Bara District of Nepal, holds profound historical and cultural significance, primarily due to the Gadhimai Festival, recognized as one of the largest animal sacrifice events in the world. This temple’s origins can be traced back around 300 years to a pivotal moment in the life of Bhagwan Chowdhary, the temple’s founder. According to legend, Chowdhary had a dream where the goddess Gadhimai demanded blood as a form of sacrifice in exchange for freeing him from prison, protecting him from evil, and promising him prosperity and power. Initially, the goddess asked for a human sacrifice, but Chowdhary successfully offered an animal instead, establishing a tradition that has been maintained every five years since.
                    </p>
                <?php endif ?>
            </div>
            <div class="col-md-6 mb-3">
                <img src="<?= base_url('assets/image/history/gadhimai-temple.jpg') ?>" class="img-fluid img-responsive rounded" alt="Gadhimai Temple" />
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="container py-5">
    <?php if (session()->get('language') === 'ne'): ?>
        <h3 class="heading text-center">गढीमाई पूजाको उत्पत्ति</h3>
    <?php else: ?>
        <h3 class="heading text-center">Origins of Gadhimai Worship</h3>
    <?php endif ?>
        <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block" />

        <div class="origin">
            <div class="row my-4">
                <div class="col-md-6">
                    <img src="/assets/image/history/gadhimai.jpg" class="img-fluid img-responsive rounded" alt="Gadhimai Festival" />
                </div>
                <div class="col-md-6">
                    <?php if (session()->get('language') === 'ne'): ?>
                        <p class="text-justify custom-text">
                            गढीमाई मन्दिर नेपालको बरियारपुरमा अवस्थित छ र दक्षिण एशियाका सबैभन्दा पूजनीय र महत्वपूर्ण धार्मिक स्थलहरू मध्ये एक हो, जुन देवी गढीमाईको पूजाका लागि समर्पित छ। मन्दिरको उत्पत्ति पुस्ताहरूमा हस्तान्तरित गहिरो किंवदन्तीमा निहित छ, जसले देवी र स्थानीय समुदाय बीचको गहिरो आध्यात्मिक सम्बन्धलाई प्रतिबिम्बित गर्दछ।
                            धेरै वर्ष पहिले, बरियारपुर गाउँका एक सम्मानित जमिनदार भगवान चौधरी दुर्भाग्यपूर्ण परिस्थितिमा जेल परेका थिए। गाउँलेहरूले एक चोरलाई पक्रिएर कुटेर मारेपछि उच्च नैतिकताका व्यक्ति चौधरीले आफ्नो समुदायलाई बचाउन घटनाको जिम्मा लिए। त्यसपछि उनलाई ऐतिहासिक मकवानपुर किल्लामा थुनामा राखिएको थियो।
                            जेलमा रहँदा, भगवान चौधरीले देवी कालीको ध्यान र प्रार्थनामा आफूलाई समर्पण गरे। परम्परा अनुसार, एक रात देवी उनको सपनामा देखा परे र उनलाई आफ्नो सम्मानमा मन्दिर बनाउन निर्देशन दिए।
                        </p>
                    <?php else: ?>
                        <p class="text-justify custom-text">
                            The Gadhimai Temple, located in Bariyarpur, Nepal, is one of the most revered and significant religious sites in South Asia, dedicated to the worship of Goddess Gadhimai. The temple’s origin is rooted in a profound legend passed down through generations, reflecting the deep spiritual connection between the goddess and the local community.
                            Many years ago, a respected landlord named Bhagwan Chaudhary from the village of Bariyarpur was imprisoned under unfortunate circumstances. After a thief was caught and beaten to death by the villagers, Chaudhary, a man of high moral standing, took responsibility for the incident to protect his community. He was subsequently detained at the historic Makawanpur Fort.
                            While imprisoned, Bhagwan Chaudhary devoted himself to meditation and prayer to Goddess Kali. According to tradition, one night, the goddess appeared in his dream and instructed him to build a temple in her honor. </p>
                    <?php endif ?>
                </div>
            </div>
            <?php if (session()->get('language') === 'ne'): ?>
                <p class="text-justify custom-text">
                    जेलका ढोका खुलेको र आफू मुक्त भएको पाए। उनले यसलाई देवीको आशीर्वादको रूपमा माने र निर्देशन अनुसार मन्दिर बनाउने प्रतिज्ञा गरे।
                    चौधरी गाउँ फर्कंदा, उनले आफ्नो सपनामा देवी देखा परेको ठाउँबाट पवित्र माटो बोके। बाटोमा, माटो उनले विश्राम गरेका केही ठाउँहरूमा खस्यो। समय बित्दै जाँदा, मकवानपुर गढी र जीतपुर गढी सहित यी स्थानहरू पवित्र स्थलहरू बने जहाँ मानिसहरूले देवी गढीमाईको पूजा गर्न थाले।
                    बरियारपुर फर्किएपछि, भगवान चौधरीले मन्दिर निर्माण गर्न उपयुक्त स्थान खोजे। उनले दुखा कछडियाका सन्तान, एक सम्मानित स्थानीय व्यक्तिको सल्लाह लिए। देवीको सम्मानमा एक अनुष्ठानमा, गाउँलेले आफ्नो शरीरका पाँच भागबाट रगत बगाए र भनिएको छ कि रगतले पृथ्वीलाई उज्यालो पारेको थियो, जसले देवीले मन्दिरको लागि स्थान स्वीकार गरेको संकेत गर्दछ।
                    यो अनुष्ठान पछि, भगवान चौधरीले गढीमाई मन्दिर स्थापना गरे र देवीको सम्मान गर्न र उनको आशीर्वादको लागि धन्यवाद दिन पशु बलि दिने परम्परा सुरु भयो। सुरुमा, पाँच जीवित प्राणीहरू - एक जङ्गली मुसा, एक स्थानीय कुखुरा, एक बंगुर, एक बोका र एक भैंसी - प्रतीकात्मक श्रद्धाको रूपमा चढाइएको थियो। यो परम्परा शताब्दीहरूदेखि निरन्तर चलिआएको छ र प्रत्येक पाँच वर्षमा भव्य गढीमाई मेलाको समयमा मनाइन्छ, जसले नेपाल र भारत तथा विश्वभरबाट लाखौं भक्तहरूलाई आकर्षित गर्दछ।
                    गढीमाई मन्दिर गहिरो आध्यात्मिक महत्वको स्थानको रूपमा रहन्छ, जहाँ भक्तहरू देवीको आशीर्वाद खोज्न, प्रतिज्ञा पूरा गर्न र पुरातन परम्पराहरूको सम्मान गर्न आउँछन्। शताब्दीहरूमा, यो एक सांस्कृतिक र धार्मिक स्थल बनेको छ, जसले अनगिन्ती उपासकहरूको विश्वास र भक्तिलाई प्रतिनिधित्व गर्दछ।
                </p>
            <?php else: ?>
                <p class="text-justify custom-text">Upon waking, Chaudhary miraculously found the prison doors open and himself freed. He considered this divine intervention a blessing from the goddess, and he made a vow to build a temple as instructed.
                    As Chaudhary journeyed back to his village, he carried sacred soil from the spot where the goddess had appeared in his dream. Along his path, the soil fell in several places where he rested. Over time, these locations, including Makawanpur Gadhi and Jeetpur Gadhi, became sacred sites where people began worshiping Goddess Gadhimai.
                    Upon his return to Bariyarpur, Bhagwan Chaudhary searched for a suitable location to build the temple. He sought guidance from a villager who was a descendant of Dukha Kachadiya, a respected local figure. In a ritual to honor the goddess, the villager shed blood from five parts of his body, and it is said that the blood illuminated the earth, signifying the goddess’s acceptance of the site for her temple.
                    Following this ritual, Bhagwan Chaudhary established the Gadhimai Temple, and a tradition of animal sacrifice began to honor the goddess and give thanks for her blessings. Initially, five living beings—a forest rat, a local cock, a pig, a male goat, and a male buffalo—were offered as a symbolic tribute. This tradition has continued for centuries and is observed every five years during the grand Gadhimai festival, attracting millions of devotees from Nepal and India.
                    The Gadhimai Temple remains a place of deep spiritual significance, where devotees come to seek the goddess’s blessings, fulfill vows, and honor ancient traditions. Through the centuries, it has become a cultural and religious landmark, embodying the faith and devotion of countless worshippers.
                </p>
            <?php endif ?>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="container py-5">
    <?php if (session()->get('language') === 'ne'): ?>
        <h3 class="heading text-center">गढीमाई मेला</h3>
    <?php else: ?>
        <h3 class="heading text-center">The Gadhimai Festival</h3>
    <?php endif ?>
        <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block" />

        <div class="row">
            <div class="col-md-6">
                <?php if (session()->get('language') === 'ne'): ?>
                    <p class="text-justify custom-text">
                        गढीमाई मेला प्रत्येक पाँच वर्षमा आयोजना हुन्छ र नेपाल र भारत तथा विश्वभरबाट लाखौं भक्तहरूलाई आकर्षित गर्दछ। ऐतिहासिक रूपमा, मेलामा देवीको सम्मान गर्न र भाग्य ल्याउने, बाधा हटाउने र समृद्धि सुनिश्चित गर्ने धार्मिक विश्वास पूरा गर्न पशुहरूको सामूहिक बलिदान समावेश थियो। शताब्दीहरूमा, यो परम्परा एक प्रमुख धार्मिक घटनामा विकसित भएको छ, जसले विश्वव्यापी स्तरमा ध्यान आकर्षित गरेको छ।
                    </p>
                <?php else: ?>
                    <p class="text-justify custom-text">
                        The Gadhimai Mela is held every five years and attracts millions of devotees from both Nepal and India and from around the world. Historically, the festival involved the mass sacrificial offering of animals to honor the goddess and fulfill the religious belief that it would bring good fortune, remove obstacles, and ensure prosperity. Over the centuries, this tradition has grown into a major religious event, drawing attention on a global scale.
                    </p>
                <?php endif ?>
            </div>
            <div class="col-md-6">
                <img src="/assets/image/history/gadhimai-festival.jpg" class="img-fluid img-responsive rounded" alt="Gadhimai Temple" />
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="container py-5">
    <?php if (session()->get('language') === 'ne'): ?>
        <h3 class="heading text-center">धार्मिक र सांस्कृतिक महत्व</h3>
    <?php else: ?>
        <h3 class="heading text-center">Religious and Cultural Significance</h3>
    <?php endif ?>
        <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block" />

        <?php if (session()->get('language') === 'ne'): ?>
            <p class="text-justify custom-text">
                गढीमाई मन्दिर धार्मिक विश्वास, एकता र परम्पराको प्रतीकको रूपमा लाखौं हिन्दूहरू, विशेष गरी नेपाल र भारतका लागि खडा छ। मन्दिर केवल धार्मिक केन्द्र मात्र होइन, सांस्कृतिक स्थल पनि हो। गढीमाई मेला विविध समुदायहरूलाई एकताबद्ध गर्दछ, जसले सम्बन्ध र सामूहिक भक्तिभावको भावनालाई बढावा दिन्छ।
                शताब्दीहरूदेखि, गढीमाईको पूजा भक्तहरूका इच्छा पूरा गर्न, व्यक्तिगत र व्यावसायिक प्रयासहरूमा सफलता सुनिश्चित गर्न र जीवनबाट बाधा हटाउनसँग जोडिएको छ। मन्दिरमा, विशेष गरी गढीमाई मेलाको समयमा गरिने अनुष्ठानहरूले स्वास्थ्य, समृद्धि र सुरक्षाको लागि देवीको आशीर्वाद आह्वान गर्ने विश्वास छ।
            </p>
        <?php else: ?>
            <p class="text-justify custom-text">
                The Gadhimai Temple stands as a symbol of religious faith, unity, and tradition for millions of Hindus, especially in Nepal and India. The temple is not only a religious center but also a cultural landmark. The Gadhimai festival brings together diverse communities, fostering a sense of belonging and collective devotion. For centuries, the worship of Gadhimai has been associated with granting the wishes of devotees, ensuring success in personal and professional endeavors, and removing obstacles from their lives. The rituals performed at the temple, particularly during the Gadhimai Mela, are believed to invoke the blessings of the goddess for health, prosperity, and protection
            </p>
        <?php endif ?>
    </div>
</section>

<section class="container-fluid">
    <div class="container py-5">
    <?php if (session()->get('language') === 'ne'): ?>
        <h3 class="heading text-center">मन्दिर वास्तुकला र वरपर</h3>
    <?php else: ?>
        <h3 class="heading text-center">Temple Architecture and Surroundings</h3>
    <?php endif ?>
        <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block" />

        <div class="row">
            <div class="col-md-6">
                <?php if (session()->get('language') === 'ne'): ?>
                    <p class="text-justify custom-text">
                        गढीमाई मन्दिर आफैं परम्परागत नेपाली धार्मिक वास्तुकलाको अवतार हो, जसमा सरल तर पवित्र संरचनाहरू छन् जसले दैनिक हजारौं आगन्तुकहरूलाई स्वागत गर्दछ। मन्दिर परिसर एक शान्त र आध्यात्मिक रूपमा चार्ज गरिएको वातावरण हो, जहाँ भक्तहरू प्रार्थना गर्छन्, बत्ती बाल्छन् र वर्षभरि विभिन्न धार्मिक अनुष्ठानहरूमा भाग लिन्छन्।
                        नेपालको लहलह हरियाली तराई क्षेत्रमा अवस्थित मन्दिर समृद्ध सांस्कृतिक र ऐतिहासिक स्थलहरूले घेरिएको छ। मन्दिरको घर बरियारपुर गाउँ एक शान्त समुदाय हो जहाँ आध्यात्मिकता र भक्ति स्थानीय मानिसहरूको दैनिक जीवनसँग मिल्दछ।
                    </p>
                <?php else: ?>
                    <p class="text-justify custom-text">
                        The Gadhimai Temple itself is an embodiment of traditional Nepalese religious architecture, featuring simple but sacred structures that welcome thousands of visitors daily. The temple precinct is a serene and spiritually charged environment, with devotees offering prayers, lighting lamps, and participating in various religious rituals throughout the year.
                        Situated in the lush Terai region of Nepal, the temple is surrounded by rich cultural and historical landmarks. Bariyarpur village, home to the temple, is a peaceful community where spirituality and devotion blend with the everyday lives of the local people.
                    </p>
                <?php endif ?>
            </div>
            <div class="col-md-6">
                <img src="/assets/image/history/gadhimai-architecture.jpg" class="img-fluid img-responsive rounded" alt="Temple Architecture" />
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="container py-5">
    <?php if (session()->get('language') === 'ne'): ?>
        <h3 class="heading text-center">भविष्यतर्फ हेर्दै</h3>
    <?php else: ?>
        <h3 class="heading text-center">Looking Towards the Future</h3>
    <?php endif ?>
        <img src="/assets/image/divider.svg" class="divider img-fluid mx-auto d-block" />

        <?php if (session()->get('language') === 'ne'): ?>
            <p class="text-justify custom-text">
                समयको परिवर्तनसँगै गाढीमाई मन्दिरको विकास भइरहेको भए पनि यसको मूल उद्देश्य लाखौँ भक्तजनहरूका लागि पूजा र आध्यात्मिक शरणस्थानको रूपमा सेवा गर्नु नै हो। मन्दिर अधिकारीहरू, धार्मिक नेताहरू र सरकारी निकायहरूको सहयोगमा यसको ऐतिहासिक र सांस्कृतिक महत्वलाई संरक्षण गर्दै आधुनिक मूल्य र नैतिक मानकहरूसँग अनुकूल हुन प्रतिबद्ध छन्।
                गाढीमाई मन्दिरले आफ्नो इतिहास भरि आशा, विश्वास र भक्तिभावको अटल शक्तिको प्रतीक बन्न जारी राखेको छ। यो केवल धार्मिक सम्पदाको प्रतीक मात्र होइन, तर मनन र परिवर्तनको लागि पनि एक स्थल हो।
                गाढीमाई मन्दिरले सबै भक्तजनहरूलाई देवीको कृपा अनुभव गर्न, यसका पवित्र अनुष्ठानहरूमा भाग लिन र शताब्दीहरू पार गर्ने परम्पराको हिस्सा बन्न स्वागत गर्दछ। गाढीमाईको आशीर्वादले सबैलाई समृद्ध र शान्तिपूर्ण जीवनतर्फ निर्देशित गरोस्।
            </p>
        <?php else: ?>
            <p class="text-justify custom-text">
                As the Gadhimai Temple evolves with time, its core purpose remains the same: to serve as a place of worship and spiritual refuge for millions of devotees. The temple authorities, in cooperation with religious leaders and government bodies, are committed to preserving its historical and cultural significance while adapting to modern values and ethical standards.
                Through its storied history, the Gadhimai Temple continues to symbolize hope, faith, and the enduring power of devotion. It stands not only as a beacon of religious heritage but also as a site for reflection and transformation.
                The Gadhimai Temple welcomes all devotees to experience the grace of the goddess, participate in its sacred rituals, and be part of a tradition that transcends centuries. May the blessings of Gadhimai guide all towards a prosperous and peaceful life.
            </p>
        <?php endif ?>
    </div>
</section>

<?= $this->endSection() ?>