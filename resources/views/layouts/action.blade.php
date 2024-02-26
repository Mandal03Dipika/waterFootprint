@extends('layouts.main')
@section('content')
<style>
    button {
        width: 150px;
        color: black;
        font-size: px;
        padding: 8px 0;
        background: #fff;
        border: 0;
        border-radius: 20px;
        outline: none;
        margin-top: 30px;
    }

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
</style>

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
            <img src="{{asset('images/water_assesment.png')}}" width="667" height="697" loading="lazy" alt="hero banner"
                class="responsive">
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
            <img src="{{asset('images/water footprint.jpg')}}" width="667" height="697" loading="lazy" alt="hero banner"
                class="responsive">
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


{{-- <div class="container">
    <h1></b>
        <center>SCHOOLS<center></b>
    </h1>
    <center>The power of youth.
        It’s never too early to begin talking about the importance of saving water. Schools are the best places to
        involve students and create an environmental impact. Here’s what your institution can do to help save the
        world’s most precious resource:<center>
            <h2>Fix Leaks:</h2>
            <p> Regularly inspect and repair plumbing leaks, including faucets, toilets, and pipes. Leaking fixtures can
                waste a substantial amount of water over time.</p>
            <button type="button">EXPLORE</button>
            <br><br>
            <h2>Install Water-Efficient Fixtures: </h2>
            <p>Replace old and inefficient toilets, urinals, faucets, and showers with low-flow or dual-flush models.
                These fixtures use significantly less water while maintaining functionality.</p>
            <button type="button">EXPLORE</button>
            <br>
            <br>
            <h2>Upgrade Appliances: </h2>
            <p>Consider replacing older dishwashers and washing machines with water-efficient models that have high
                ENERGY STAR ratings.</p>
            <button type="button">EXPLORE</button>
            <br>
            <br>
            <h2>Collect Rainwater:</h2>
            <p>Install rain barrels or a rainwater harvesting system to collect rainwater for outdoor irrigation and
                landscaping.</p>
            <button type="button">EXPLORE</button>
            <br><br>
            <h2>Educational Programs:</h2>
            <p>Implement water conservation education programs for students and staff. Teach the importance of water
                conservation and provide practical tips for saving water.</p>
            <button type="button">EXPLORE</button>
            <br>
            <br>
            <h2>Reduce Landscape Watering:</h2>
            <p>Use native or drought-resistant plants for landscaping, and employ efficient irrigation systems like drip
                irrigation. Water lawns and gardens during non-peak hours to reduce evaporation.</p>
            <button type="button">EXPLORE</button>
            <br>
            <br>
            <h2>Three main components of a water footprint:</h2>
            <br>
            <p>
                <b>1) Blue Water Footprint:</b> This refers to the volume of freshwater (surface water and groundwater)
                that is consumed directly, such as for irrigation, industrial processes, and domestic use.
                <br><br>
                <b>2) Green Water Footprint:</b> This represents the amount of rainwater that is used in the growth of
                crops and vegetation. It includes the water that is naturally absorbed by plants and does not run off
                into rivers or lakes.
                <br><br>
                <b>3) Grey Water Footprint:</b> This component of the water footprint measures the amount of freshwater
                needed to dilute and assimilate pollutants and contaminants resulting from various human activities,
                such as industrial processes or agriculture. It indicates the pollution aspect of water use.
            </p>
            <button type="button">EXPLORE</button>
            <br><br>
            <h2>Direct and indirect use of water</h2>
            <p>Direct water use refers to the immediate consumption of water for specific purposes, such as drinking,
                bathing, or irrigation. It includes water withdrawn from sources like rivers, lakes, or wells for direct
                use in homes, industries, or agriculture.
                <br><br>
                Indirect water use, on the other hand, encompasses the hidden or virtual water embedded in the
                production, transportation, and consumption of goods and services. For example, the water used to grow
                crops for food production or the water used in manufacturing processes contributes to the indirect water
                footprint of products. It quantifies the less apparent but interconnected water consumption across
                supply chains and is essential for understanding the broader impact of human activities on water
                resources and ecosystems.
            </p>
            <button type="button">EXPLORE</button>
            <br><br>
            <h2>Average uses of water in India:</h2>
            <p>In India, the average per capita water usage is around 135 liters per day, covering domestic, industrial,
                and agricultural needs. Agriculture consumes the majority, accounting for approximately 80% of the
                country's total water usage, while domestic and industrial sectors make up the rest. Water availability
                and usage patterns vary regionally.</p>
            <button type="button">EXPLORE</button>
</div> --}}
@endsection