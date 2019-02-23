@extends('layouts.app')

@section('content')
<div class="container">
    <div class="post row">
        <div class="post-header col-md-12">
            <h1>
                Wonderful Indonesia, a Heaven lies on the east.
            </h1>
        </div>
        <div class="post-date col-md-1 col-2">
            3rd dec 2018
        </div>
        <div class="post-subheader col-md-4 col-8">
            Indonesia, an archipelago country of great cultural heterogeneity they say.
            </div>
        <div class="post-divider col-md-12">
            <a href="www.indonesia.travel">
            <img src="{{asset('img/wonderful-indonesia.png')}}" class="post-img"
            alt="Wonderful Indonesia">
            </a>
        </div>
        <div class="post-p col-md-8">
            <p>
            An early spring morning I woke up with feelings of dizziness. A feeling 
            I dread very much. I just remember how I struggled to stop my worst habit 
            of playing Mobile games at midnight, good thing my roommate gave me Quarelin, 
            one of the best painkiller in Hungary. 
            </p>
            <p>
            After all that I decided to continue my papers, right before I start, 
            my roommate asked me about my home country, it is kind of funny that 
            I've never told him about Indonesia since we've known for each other 
            for months beside telling him it's a country in Southeast Asia.
            </p>
            <p>
            <b>Roommate</b>: "So how's it?"<br>

            <b>Myself</b>: "It's big, and it consisted of huge islands and thousands of smaller islands"<br>

            <b>Roommate</b>: "The size of hungary?"<br>

            <b>Myself</b>: (oh, boy) <b>*open google maps*</b> "See... it's huge (I mean wide), it could spanned 
            from UK to Iran, infact it is the 2nd widest nation on earth by meaning true size, but 
            mostly the area is consisted of water"<br>

            <b>Roommate</b>: *nod* *nod*
            </p>
            <p>
            I continued to explain the diversity of Indonesia, the fact as an Archipelago country with 17,504 islands,
            we have plenty of ethnics with various cultures, differences in language, religion, race, and unified by 
            lingua franca <i>Bahasa Indonesia</i>.
            </p>
            <p>
            Basically, we have so much room for everyone. Lucky for us to be granted fertile soil by God.
            </p>
            <p>
            I'm a muslim, but I have christian friends and sometimes buddhist, I considered all of them as my own brother, 
            nonetheless of what western media potray about my religion, we live in so what they called harmony.
            </p>
            <div class="post-p-header">
                <h2>People</h2>
            </div>
            <p>
            Friendliest you could've ever met, if you ask me what Indonesians are good at then being friendly is
            what we're good at most.
            </p>
            <div>
                <img src="{{asset('img/javanese-child.jpg')}}" class="post-p-img" alt="javanese child">
                <div class="post-p-img-desc">
                        <i>Javanese girls smiling :)</i>
                </div>
            </div>
            <div>
                <img src="{{asset('img/papuan-girls.jpg')}}" class="post-p-img" alt="papuan girls">
                <div class="post-p-img-desc">
                        <i>Prettiest of us all, Papuan ladies</i>.
                </div>
            </div>
            <p>
            Indonesians have skin colour range from brown to peach, you can find some that are white skinned which mostly
            ethnic Chinese or have Chinese blood, and some good ol' Dutch descendant.
            </p>
            <p>
            We love to smile and sometimes approach <i>bules</i> and ask for picture whenever possible, 
            eventhough it may awkward for some foreigners but we as locals really happy doing that, and some 
            <i>bules</i> also appreciated that, because it makes them feel like a celebrity.
            </p>
            <!--
            <p>
            <b>Indonesians</b>: "Mister, cekrek cekrek"<br>
            <b>Bules</b>: "Ummm? Yes?"<br>
            <b>Indonesians</b>: "<b>*start taking photos*</b> cheese!"<br>
            <b>Bules</b>: ".___."
            </p>
            <p>
            (LOL), but don't worry, I rarely seen anyone doing that anymore these days. Maybe about 5 years ago. 
            Good ol' times.
            </p>
            -->
            <p>
            Indonesians are pretty sociable, we could talk for all night long with friends.
            </p>
            <img src="" alt="">

             <div class="post-p-header">
                <h2>Norm & Cultures</h2>
            </div>
            <p>
            Indonesian embraces Eastern culture, which "respect your elders" is considered as the hegemony, 
            and tend to be more conservatives in most part of daily lives. And of course, we take care of 
            our parents when they get old, even take them to our home.
            In terms of culture we have etiquette such as:
            </p>
            <div class="post-p-img">
                <img src="{{asset('img/salim.jpg')}}" class="post-p-img" alt="salim">
                <div class="post-p-img-desc">
                <i>salim—the younger presses his or her forehead on the elder's 
                hand—</i> similar to hand kissing.
                </div>
            </div>
            <div class="post-p-img">
                <img src="{{asset('img/permisi.jpg')}}" class="post-p-img" alt="permisi">
                <div class="post-p-img-desc">
                <i>permisi—bow down a bit to respect the elders when passing by—</i>.
                </div>
            </div>
            <p>
            Being old was never been problematic, since their children will take care of them.
            </p>
            <p>
            We're also flanked by two Asian great civilizations, China and India, influence is inevitably perticularly from Indian 
            regions, you can clearly find how Indians influenced us in much aspects of our cultures. Including religion,
            kingdom, writing system, traditional clothing, ritual, celebration day, etc.
            </p>
            <p>
            We were majority Hindu back then, until Islam came in with trade and marriages, but everyone can still clearly 
            see of what left from Hindus.
            </p>
            <div>
                <img src="{{asset('img/wayang.jpg')}}" class="post-p-img" alt="wayang">
                <div class="post-p-img-desc">
                <i>Wayang Kulit</i> derived from word <i>Ma Hyang</i>, mostly telling stories from the Mahabrata or the
                Ramayana.
                </div>
            </div>
            <div>
                <img src="{{asset('img/candi.jpg')}}" class="post-p-img" alt="candi">
                <div class="post-p-img-desc">
                Prambanan Temple with sunrise! Lookin' good.
                </div>
            </div>
            <p>
            There's unique ritual that I've never encountered anywhere in the world, and only existed in Indonesia, and that
            is the <b>Toraja</b>, a pretty famous Ethnic group from South Sulawesi.
            </p>
            <p>
            They keep their deceased relatives within their houses for months (even for years!) before the funeral ceremony
            (<i>thats quite creepy</i>), Torajans believe that death is a gradual process toward Afterlife.
            During the waiting period, the deceased relatives' are wrapped in several cloth and kept under <i>tongkonan</i>.
            </p>
            <p>
            The funeral considered as a very important celebration, that is why it took time, one of the component of the
            ritual is slaughter of water buffalo. It depends on the person who died, the more buffalo are slaughtered the more
            powerful the person was.
            </p>
            <p>
            I've seen BBC and National Geographic covered this tradition "Living with the dead",
            eventually ended up making me more fascinated and maybe someday I'll pay for a visit to Tana Toraja to see 
            <i>Aluk To Dolo</i> ("Way of the Ancestors").
            </p>
            <p>
            *No pics I don't want disturb anyone. :)
            </p>
            <div class="post-p-header">
                <h2>Geography</h2>
            </div>
            <p>
            Geography, this is something that definitely can't be missed, Indonesia is unique because of its geography.
            </p>
            <p>
            The entire country is located right in the <i><a href="https://en.wikipedia.org/wiki/Ring_of_Fire">ring of fire</i>
            </a>, a major area in the basin of pacific ocean, which tend to prone to natural disaster as the consequences for 
            its natural beauties.
            </p>
            <p>
            Most of the terrain are: tropical rainforest.
            </p>
            <img src="{{asset('img/rainforest.jpg')}}" class="post-p-img" alt="borneo rainforest">
            <div class="post-p-img-desc">
            Borneo rainforest, home to 10,000 plant species.
            </div>
            <p>
            Not very true when you look at the big cities where the majority are located in the plain based terrain or the coast.
            </p>
            <p>
            We have 400 volcanoes within our borders, atleast there are 90 still active in some way. Since there's no way
            to tell when and which will erupt, I can only tell by their recent activities.
            </p>
            <p>
            Merapi and Kelut both are the most active volcanoes they have erupted more than a hundred times in the last 
            10 centuries.
            </p>
            <img src="{{asset('img/merapi.jpg')}}" class="post-p-img" alt="merapi mountain">
            <div class="post-p-img-desc">
            Mountain Merapi, a mystical mountain according to residents who live there.
            </div>
            <p>
            But don't worry the routes are pretty safe and if they erupted, there are emergency shelter provided by
            the rangers.
            </p>
            <p>
            We also have snowy mountain by the way, the glorious Puncak Jaya, located in the easternmost Indonesia, Papua,
            its a very rocky mountain and the tallest we ever had.
            </p>
            <img src="{{asset('img/puncakjaya.jpg')}}" class="post-p-img" alt="puncakjaya mountain">
            <div class="post-p-img-desc">
            That looks challenging isn't it?
            </div>
            <div class="post-p-header">
                <h2>Tourist spots</h2>
            </div>
            <p>
            Indonesia is gifted with its nature, good landscapes, and there are abundant of variety of flora and fauna
            scattered on every islands with its own uniqueness.
            </p>
            <p>
            We have beaches in every direction, wherever you walk you'll always ended up in
            beaches. Mountains are also everywhere and careful most of them are highly active.
            </p>
            <p>
            Imagine <b><i>beautiful beaches, tropical resorts, delicious foods rich in spice, temples, jungles, volcanic
            mountains </i></b>packed into one country, and that is <b><span id="indonesia">Indonesia</span></b>.
            </p>
            <p>
            I can recommend some areas I know if you want visit to Indonesia:
            </p>
            <p>
            * <i>West Nusa Tenggara, Bali, Aceh</i> provinces: for Beaches.
            </p>
            <p>
            * <i>Nusa Tenggara (East and West), Java </i>provinces: for Mountains and Hilltop.
            </p>
            <p>
            * <i>East Java, Yogyakarta, Bali</i> provinces: for Temples.
            </p>
            <p>
            * <i>Sumatran Island, Sulawesi Island, Kalimantan Island</i>: for Tropical Rainforest.
            </p>
            <p>
            * <i>Kalimantan Island, Papua, Komodo Island</i> provinces: for Flora and Fauna.
            </p>
            <p>
            My favorite has always been the East Java and East Nusa Tenggara, 
            someone I knew took all these photos of East Nusa Tenggara:
            </p>
            <div>
            <img src="{{asset('img/kelimutu.jpg')}}" class="post-p-img" alt="kelimutu">
            <div class="post-p-img-desc">
            Kelimutu National Park <i>@backpackertampan</i>
            </div>
            </div>
            <div>
            <img src="{{asset('img/weirebo.jpg')}}" class="post-p-img" alt="weirebo">
            <div class="post-p-img-desc">
            Weirebo <i>@backpackertampan</i>
            </div>
            <p class="quotes">
            <i>"The possibilities are endless, so is Indonesia's beauty"</i>
            </p>
            <p>
            <a href="https://twitter.com/hashtag/wonderfulindonesia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Ehashtag">#WonderfulIndonesia</a>
            </p>
            <!--
            <p>
            If you have interesting stories about this Majestic heaven, you can register yourself and participate in 
            blog competition that held by Minister of Tourism of Indonesia (Kemenpar): <a href="https://goo.gl/forms/RJuGs5pjTXEj5ZpD3">
            here</a>
            </p>
            <img src="{{asset('img/poster.jpeg')}}" class="post-p-img" alt="poster">
            <p>
            Make sure to make your friends join!
            </p>
            -->
        </div>
        </div>
        <!--
        <div class="post-aboutme col-md-4">
            <div class="post-aboutme-header">
            Hi, I'm fajri
            </div>
            <hr class="post-aboutme-hr">
            <img src="{{asset('img/aboutme.png')}}" alt="aboutme">
            <div class="post-aboutme-p">
            A programmer. A student. Just someone who wanders off in the kitchen every 15 minutes, nothing special,
            have a good day!
            </div>
        </div>
        -->
    </div>
</div>
@endsection