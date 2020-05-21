@extends('layout')
@section('content')
<p>
    Many lives have been affected by the ongoing pandemic. SEBS has provided financial help to few of our alumni who
    have
    been affected and we further plan to support our members in this difficult time.
</p>
<p>In order to support our members, our
    school, and the society, SEBS executive committee has decided to conduct a donation drive. Donation received will be
    utilized as following:</p>
<ol>

    <li>
        Budhanilkantha School has been conducting online classesfor the last few weeks. School is using
        Microsoft Teams as the platform for online classes and is providing data packages to those students in need. In
        this
        regard, BNKS wants to give laptop to each teacher so that they can conduct online classes more efficiently and
        have
        requested for 35 laptops (another 35 will be funded by BNKS and Budhanilkantha School Endowment Fund). SEBS has
        already
        received the specification. These laptops will remain as the school property. For these 35 laptops, we expect
        the amount
        to be almost 16,200 USD (assuming NPR. 56,000 for each laptop). This is a part of our larger effort to help
        school
        develop and implement a digital use plan.
    </li>
    <li>
        Some of our members financially struggling for basic necessities because of
        the current situation. We are already supporting some of our sisters and brothers in thistime of need, and
        anticipate
        supporting more in the future.As our social responsibility we may need to support our community as well.
    </li>
</ol>
<p>
    Therefore, we
    urge all SEBSers to support our alma mater, our members and community in this challenging time. Your contribution
    will
    be highly valued.
</p>

<div class="donation-grid">
    <div class="description">
        <strong><u>Donations can be made on</u></strong> <br>
        Account No: 1906018790044 <br>
        Name: SEBS <br>
        Bank: Himalayan Bank <br>
        Branch: Thamel <br>

        <p>
            If you are abroad you can make donation to SEBS-NA, SEBS-AUS, SEBS-UK/Europe.
            <br>
            To donate to SEBS-NA follow this
            link: <a style="color:white"
                href="http://www.sebsonline.org/donation/covid19.aspx">http://www.sebsonline.org/donation/covid19.aspx</a>
        </p>

        <br>
        Thank you for your continued support. SEBS Executive Committee
    </div>
    <div class="form">
      <img src="https://esewa.com.np/common/images/esewa_logo.png" alt="esewa logo">
        <form action="{{ route('process-payment') }}" method="POST">
            @csrf
            <input min="100" type="number" name="amt" step="any" placeholder="Donation Amount" required>
            <input value="Donate" class="btn btn-dark" type="submit">
        </form>
    </div>
</div>



@endsection
