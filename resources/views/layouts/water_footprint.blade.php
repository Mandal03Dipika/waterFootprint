@extends('layouts.main')
@section('content')
<style>
    .progress {
        background-color: red;
        height: 3px;
        animation: load 2s ease-in-out 1;
    }

    @keyframes load {
        0% {
            width: 0;
        }

        40% {
            width: 60vw;
        }

        80% {
            width: 90vw;
        }

        100% {
            width: 100vw;
        }
    }

    .hero {
        position: relative;
        min-height: 680px;
    }

    .hero-title,
    .hero-text {
        margin-bottom: 35px;
    }


    .hero-text {
        --fs-7: 1.8rem;
    }

    @media (min-width: 768px) {
        .hero {
            min-height: 550px;
            display: grid;
            place-items: center;
        }

        .hero .container {
            display: flex;
            align-items: center;
            gap: 40px;
        }
    }

    @media (min-width: 992px) {
        .hero {
            position: relative;
            min-height: 680px;
        }
    }

    .hero-title,
    .hero-text {
        margin-bottom: 35px;
    }

    .w-100 {
        width: 100%;
    }

    .h1 {
        color: var(--jet);
        font-size: var(--fs-3);
        font-weight: var(--fw-800);
        font-family: 'Chela One', cursive;
        font-family: 'Merriweather', serif;
    }

    @media (min-width: 1200px) {
        .container3 {
            background-color: rgb(214, 214, 214);
            border: 7px solid rgb(100, 0, 100);
            height: 520px;
            width: 1500px;
            margin: 0 auto;
            border-radius: 20px;
        }

        :is(.popular, .blog) .card-content {
            padding: 30px;
        }
    }

    .responsive {
        width: 100%;
        height: auto;
    }
</style>

<body>
    <section class="section hero">
        <div class="container">
            <figure class="hero-banner">
                <img src="{{asset('images/aqua.webp')}}" width="667" height="697" loading="lazy" alt="hero banner"
                    class="responsive">
            </figure>
            <div class="hero-content">
                <h3 class="section-subtitle"
                    style="font-size: 3vw; color: #f3d739; font-style: italic; flex-grow: inherit; font-weight:bolder; font-family:cursive ;">
                    what is</h3>
                <h1 class="h1 hero-title" style="color:#2e9dbf ;font-size: 7vw;">water footprint?</h1>
                <p>A water footprint is a measure of the total amount of water used directly and indirectly by an
                    individual,<br> organization, community, or product throughout its entire lifecycle. It takes into
                    account the water used <br> for various purposes, including drinking, cooking, bathing, agriculture,
                    manufacturing, and more. The <br> concept of a water footprint was developed to raise awareness
                    about water scarcity and the environmental impact of water consumption.</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Click
                        here</a>
                    <br>

                    <a href="#" class="btn btn-outline">To Learn
                        More</a>
                </div>
            </div>
        </div>
    </section>
    </div>
    <hr style="height:2px;border-width:5;color:gray;background-color:gray">
    <section class="section hero">
        <div class="container">
            <div class="hero-content">
                <h2 style="color:#2e9dbf ;font-size: 4vw;">Water Footprint Assessment</h2>
                <p>A water footprint assessment is a systematic evaluation of water use throughout a product's lifecycle
                    or in specific <br>activities,measuring direct and indirect water consumption. It identifies
                    environmental impacts, such as water scarcity <br> and pollution, to inform sustainable water
                    management and resource conservation.</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Click
                        here</a>
                    <br>
                    <a href="#" class="btn btn-outline">To Learn
                        More</a>
                </div>
            </div>
            <figure class="hero-banner">
                <img src="{{asset('images/water_assesment.png')}}" width="667" height="697" loading="lazy"
                    alt="hero banner" class="responsive">
            </figure>
        </div>
    </section>
    <hr style="height:2px;border-width:5;color:gray;background-color:gray">
    <section class="section hero">
        <div class="container">
            <figure class="hero-banner">
                <img src="{{asset('images/agriculture.jpg')}}" width="667" height="697" loading="lazy" alt="hero banner"
                    class="responsive">
            </figure>
            <div class="hero-content">
                <h2 style="color:#2e9dbf ;font-size: 4vw;">Agricultural Water Footprint</h2>
                <p>The agricultural water footprint refers to the total volume of freshwater consumed, directly and
                    indirectly, in the production of agricultural goods. It includes the water used for irrigation, as
                    well as the water absorbed by crops from rainfall. Assessing the agricultural water footprint helps
                    understand the environmental impact of food production and the sustainability of agricultural
                    practices.</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Click
                        here</a>
                    <br>
                    <a href="#" class="btn btn-outline">To Learn
                        More</a>
                </div>
            </div>
        </div>
    </section>
    <hr style="height:2px;border-width:5;color:gray;background-color:gray">
    <section class="section hero">
        <div class="container">
            <div class="hero-content">
                <h2 style="color:#2e9dbf ;font-size: 4vw;">Personal water Footprint</h2>
                <p>Your personal water footprint is the total amount of water you use directly and indirectly through
                    daily activities like bathing, drinking, and consuming goods. It includes the water used to produce
                    the products you use and the food you eat. Reducing your water footprint involves conserving water,
                    choosing sustainable products, and being mindful of your consumption to minimize water waste.</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Click
                        here</a>
                    <br>
                    <a href="#" class="btn btn-outline">To Learn
                        More</a>
                </div>
            </div>
            <figure class="hero-banner">
                <img src="{{asset('images/footprint.webp')}}" width="667" height="697" loading="lazy" alt="hero banner"
                    class="responsive">
            </figure>
        </div>
    </section>
    <hr style="height:2px;border-width:5;color:gray;background-color:gray">
    <section class="section hero">
        <div class="container">
            <figure class="hero-banner">
                <img src="{{asset('images/water_footprint.webp')}}" width="667" height="697" loading="lazy"
                    alt="hero banner" class="responsive">
            </figure>
            <div class="hero-content">
                <h2 style="color:#2e9dbf ;font-size: 4vw;">Water Footprint Reduction</h2>
                <p>Water footprint reduction involves implementing strategies and practices to minimize water usage in
                    various activities, such as agriculture, industry, and daily life. This includes efficient
                    irrigation, recycling and reusing water, adopting water-saving technologies, and promoting
                    responsible consumption to mitigate the environmental impact of excessive water use.</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Click
                        here</a>
                    <br>
                    <a href="#" class="btn btn-outline">To Learn
                        More</a>
                </div>
            </div>
        </div>
    </section>
    <hr style="height:2px;border-width:5;color:gray;background-color:gray">
    <section class="section hero">
        <div class="container">
            <div class="hero-content">
                <h2 style="color:#2e9dbf ;font-size: 4vw;">Three main components of water footprint:</h2>
                <p><b>1) Blue Water Footprint:</b> This refers to the volume of freshwater (surface water and
                    groundwater) that is consumed directly, such as for irrigation, industrial processes, and domestic
                    use.
                    <br><br>
                    <b>2) Green Water Footprint:</b> This represents the amount of rainwater that is used in the growth
                    of crops and vegetation. It includes the water that is naturally absorbed by plants and does not run
                    off into rivers or lakes.
                    <br><br>
                    <b>3) Grey Water Footprint:</b> This component of the water footprint measures the amount of
                    freshwater needed to dilute and assimilate pollutants and contaminants resulting from various human
                    activities, such as industrial processes or agriculture. It indicates the pollution aspect of water
                    use.
                </p>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Click
                        here</a>
                    <br>
                    <a href="#" class="btn btn-outline">To Learn
                        More</a>
                </div>
            </div>
            <figure class="hero-banner">
                <img src="{{asset('images/water.png')}}" width="667" height="697" loading="lazy" alt="hero banner"
                    class="responsive">
            </figure>
        </div>
    </section>
    <hr style="height:2px;border-width:5;color:gray;background-color:gray">
    <section class="section hero">
        <div class="container">
            <figure class="hero-banner">
                <img src="{{asset('images/water footprint.jpg')}}" width="667" height="697" loading="lazy"
                    alt="hero banner" class="responsive">
            </figure>
            <div class="hero-content">
                <h2 style="color:#2e9dbf ;font-size: 4vw;">Average use of water in India</h2>
                <p>In India, the average per capita water usage is around 135 liters per day, covering domestic,
                    industrial, and agricultural needs. Agriculture consumes the majority, accounting for approximately
                    80% of the country's total water usage, while domestic and industrial sectors make up the rest.
                    Water availability and usage patterns vary regionally.</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Click
                        here</a>
                    <br>
                    <a href="#" class="btn btn-outline">To Learn
                        More</a>
                </div>
            </div>
        </div>
    </section>
    <hr style="height:2px;border-width:5;color:gray;background-color:gray">
    <section class="section hero">
        <div class="container">
            <div class="hero-content">
                <h2 style="color:#2e9dbf ;font-size: 4vw;">Policy and Regulation</h2>
                <p>Policies and regulations addressing water footprints focus on sustainable water use and environmental
                    protection. They encompass water pricing strategies, quality standards, allocation frameworks,
                    emissions limits, efficiency mandates, and environmental assessments. These measures encourage
                    responsible water management in industries, agriculture, and daily life, aiming to mitigate water
                    scarcity, pollution, and ecosystem degradation while promoting efficient resource use and
                    sustainability. International agreements further support coordinated efforts to address water
                    footprint challenges globally.</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Click
                        here</a>
                    <br>
                    <a href="#" class="btn btn-outline">To Learn
                        More</a>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection