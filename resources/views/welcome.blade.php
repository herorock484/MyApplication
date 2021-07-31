@extends('Layouts.master')
@section('title', 'Home')
@section('content')

    <!-- Slideshow container -->
    <div>
    </div>

<h1>
welcome to kenya our beautiful country
</h1>
    <p>
country kenya has many tribes. there are so many beautiful features which attracts tourists. there are such as the high mountains which servers as tourist attractions in kenya.however., there are sandy beaches in the coastal regions which act as a source of income to many kenyans in the coastal region of the country as well.  the basic culture that is well known in the world is the maasai culture. they have been known to have stuck to their culture for quite a while despite the digital modes of dressing in the present kenya today. this os the pride of africa,
    </p>

    <h>some history about kenya</h>
    <p>
        The roots of the colonial history of Kenya go back to the Berlin Conference in 1885, when East Africa was first divided into territories of influence by the European powers. The British Government founded the East African Protectorate in 1895 and soon after, opened the fertile highlands to white settlers. Even before it was officially declared a British colony in 1920, these settlers were allowed a voice in government, while the Africans and the Asians were banned from direct political participation until 1944. During this period thousands of Indians were brought into Kenya to work on building the Kenya Uganda Railway Line and subsequently settled there, whilst inviting many of their kith and kin who were mainly traders from India to join them.
    </p>

    <div class="flex w-60 justify-center" style="margin: 20px 30px; border: blue solid 2px">
        @foreach($tickerData as $coin_pair => $value)
            <div class="flex" style="padding: 0 20px;">
                <div style="background: orange; color: black; padding: 3px 5px;">{{ $coin_pair }}</div>
                <div style="padding-left: 10px; font-weight: bold">
                    {{ number_format($value['last'], 2) }}
                </div>
            </div>
        @endforeach
    </div>



@endsection
