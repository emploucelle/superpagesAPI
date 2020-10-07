@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                    You are logged in!
                    <br><br>
                    api_token =  
                    <?php
                    $user = Auth::user();
                    $api_token  = $user->api_token;
                    echo $api_token;
                    ?>

                    <br> Email: <?php echo $user->email; ?>
                    <br> Name: <?php echo $user->name; ?>


                    <p><h3>Listings</h3></p>
                    <p>GET <i>api/listings</i> =  Get all the data in listings </p>
                    <p>GET <i>api/listings/{id}</i> =  Get the data in listings base on the ID provided </p>
                    <pre>
                        <code>
    {
        "auto_id": 2,
        "id": 684020,
        "splid": null,
        "listing_type_id": 1,
        "manage_level_id": 4,
        "price_setting_id": 4,
        "user_id": 1,
        "is_featured": 0,
        "disable_claim": 1,
        "rating": 0,
        "listing_title": "Streetfile Pty Ltd",
        "company_logo": null,
        "company_slogan": null,
        "listing_email": null,
        "url_type": "http://",
        "listing_url": null,
        "listing_display_url": null,
        "listing_phone": "0262804121",
        "listing_fax": null,
        "listing_address1": "Shop 5 175 Gladstone St",
        "listing_address2": null,
        "listing_zipcode": "2609",
        "listing_summary": null,
        "listing_description": null,
        "listing_keyword": null,
        "listing_location": null,
        "hours_of_work": null,
        "listingservice_id": null,
        "countrie_id": 2,
        "countryname": "Australia",
        "state_id": 52,
        "statename": "Australian Capital Territory",
        "citie_id": 19935,
        "cityname": "Fyshwick",
        "lat_value": -35.3274,
        "lng_value": 149.185,
        "vid_url_type": null,
        "embedded_code": null,
        "video": 2,
        "attached_file": null,
        "promotional_code": null,
        "renewal_date": null,
        "status": 1,
        "extraloc": 0,
        "paid_status": 0,
        "add_transaction": 0,
        "backlink": null,
        "seo_title": null,
        "seo_friendly_url": null,
        "seo_description": null,
        "seo_keywords": null,
        "facebook_url": null,
        "twitter_url": null,
        "googleplus_url": null,
        "instagram_url": null,
        "pinterest_url": null,
        "linkedin_url": null,
        "slug": "streetfile-pty-ltd-100160",
        "latupdate": 0,
        "rankid": 0,
        "sortdate": "2015-12-31",
        "abn": null,
        "apiid": 0,
        "owner_name": null,
        "owner_emailaddress": null,
        "owner_phonenember": null,
        "addresshide1": 0,
        "addresshide2": 0,
        "created": "2015-10-12 06:11:28",
        "modified": "2015-10-12 06:11:28",
        "listing_schema": null,
        "is_paid_addon": 0,
        "is_paid_logo": 0,
        "is_paid_video": 0,
        "logo_renewal_date": null,
        "video_renewal_date": null,
        "view_flag": 0,
        "created_at": "-0001-11-30 00:00:00",
        "updated_at": "-0001-11-30 00:00:00",
        "categories": [
            {
                "id": 2,
                "listing_id": 684020,
                "category_id": 3,
                "view_flag": 0,
                "created_at": "-0001-11-30 00:00:00",
                "updated_at": "-0001-11-30 00:00:00"
            },
            {
                "id": 3,
                "listing_id": 684020,
                "category_id": 4,
                "view_flag": 0,
                "created_at": "-0001-11-30 00:00:00",
                "updated_at": "-0001-11-30 00:00:00"
            }
        ],
        "users": {
            "id": 1,
            "spuid": null,
            "user_type": 1,
            "username": "admin",
            "email": "php4@gem-it.in",
            "password": "a5362fc4187bc03b59e63f7d49063a8b3e7091a7",
            "org_password": "[D4*&FD?41-)",
            "firstname": "yasotha",
            "lastname": "chakravarthy",
            "address": "",
            "citie_id": null,
            "state_id": null,
            "countrie_id": null,
            "zipcode": null,
            "contact_number": null,
            "mobile_number": null,
            "fax_number": null,
            "website": "",
            "company_name": "",
            "company_email": null,
            "info_publish": 0,
            "image": "201401151829123_p.png",
            "register_type": 1,
            "fb_user_id": null,
            "fb_access_token": null,
            "agree_terms": 1,
            "status": 1,
            "rand_key": 94,
            "slug": "yasotha",
            "signup_ip": "202.133.108.232",
            "last_login_ip": "122.165.239.130",
            "last_logged_in_time": "2020-01-31 02:34:38",
            "last_visit": "2020-01-31 05:34:52",
            "online_status": 2,
            "apiid": 0,
            "created": "2014-01-08 14:59:20",
            "modified": "2020-01-31 05:34:38",
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00"
        },
        "states": {
            "id": 52,
            "CountryId": 2,
            "State": "Australian Capital Territory",
            "slug": "australian-capital-territory",
            "Code": "ACT",
            "ADM1Code": "AS01",
            "status": 1,
            "price": 250,
            "is_featured": 1,
            "seo_friendly_title": "Australian Capital Territory",
            "seo_meta_description": "",
            "seo_meta_keyword": "",
            "contents": "",
            "view_flag": 0,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00"
        },
        "cities": {
            "id": 19935,
            "CountryID": "2",
            "StateID": "52",
            "City": "Fyshwick",
            "Latitude": -35.3277,
            "Longitude": 149.176,
            "TimeZone": "+10:00",
            "DmaId": null,
            "Code": "",
            "image": null,
            "slug": "fyshwick",
            "postcode": null,
            "status": 1,
            "default": 0,
            "price": 0,
            "is_featured": 0,
            "seo_friendly_title": null,
            "seo_meta_description": null,
            "seo_meta_keyword": null,
            "contents": null,
            "searchfld": 1,
            "view_flag": 0,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00"
        },
        "listing_workinghours": {
            "id": 1096,
            "listing_id": 684020,
            "mon_st1": "9am",
            "mon_et1": "6pm",
            "mon_st2": "",
            "mon_et2": "",
            "mon_status": 0,
            "tue_st1": "9am",
            "tue_et1": "6pm",
            "tue_st2": "",
            "tue_et2": "",
            "tue_status": 0,
            "wed_st1": "9am",
            "wed_et1": "6pm",
            "wed_st2": "",
            "wed_et2": "",
            "wed_status": 0,
            "thu_st1": "9am",
            "thu_et1": "6pm",
            "thu_st2": "",
            "thu_et2": "",
            "thu_status": 0,
            "fri_st1": "9am",
            "fri_et1": "6pm",
            "fri_st2": "",
            "fri_et2": "",
            "fri_status": 0,
            "sat_st1": "",
            "sat_et1": "",
            "sat_st2": "",
            "sat_et2": "",
            "sat_status": 0,
            "sun_st1": "",
            "sun_et1": "",
            "sun_st2": "",
            "sun_et2": "",
            "sun_status": 0,
            "service_notes": "",
            "created": "2016-07-25 10:58:33",
            "modified": "2016-07-25 10:58:33",
            "view_flag": 0,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00"
        },
        "listing_pays": {
            "id": 1,
            "listing_id": 684020,
            "listing_payment_id": 3,
            "view_flag": 0,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00"
        },
        "listing_images": {
            "id": 1349,
            "listing_id": 684020,
            "file_name": "201511031255168201511031255163_l.jpg",
            "caption_name": null,
            "main_display": 0,
            "path": "201511031253369",
            "sessionid": "201511031253369",
            "created": "2015-11-04 03:55:33",
            "view_flag": 0,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00"
        }
    },
                        </code>
                    </pre>
                    <p>POST <i>api/listings</i> =  Store a data on listings </p>
                    <p>DELETE <i>api/listings/{id}</i> =  Delete data from listings base on the ID </p>
                    <br>

                    <p><h3>Category</h3></p>
                    <p>GET <i>api/category_listings</i> =  Get all the data in category </p>
                    <p>GET <i>api/category_listings/{id}</i> =  Get the data in category base on the ID provided </p>
                    <p>POST <i>api/category_listings</i> =  Store a data on category </p>
                    <p>DELETE <i>api/category_listings/{id}</i> =  Delete data from category base on the ID </p>
                    <br>

                    <p><h3>Description Category</h3></p>
                    <p>GET <i>api/category_desc</i> =  Get all the data in Description category </p>
                    <p>GET <i>api/category_desc/{id}</i> =  Get the data in Description category base on the ID provided </p>
                    <p>POST <i>api/category_desc</i> =  Store a data on Description category </p>
                    <p>DELETE <i>api/category_desc/{id}</i> =  Delete data from Description category base on the ID </p>
                    <br>

                    <p><h3>States</h3></p>
                    <p>GET <i>api/states</i> =  Get all the data in states table </p>
                    <p>GET <i>api/states/{id}</i> =  Get the data in states base on the ID provided </p>
                    <p>POST <i>api/states</i> =  Store a data on states table </p>
                    <p>DELETE <i>api/states/{id}</i> =  Delete data from states base on the ID </p>
                    <br>

                    <p><h3>Cities</h3></p>
                    <p>GET <i>api/cities</i> =  Get all the data in cities table </p>
                    <p>GET <i>api/cities/{id}</i> =  Get the data in cities base on the ID provided </p>
                    <p>POST <i>api/cities</i> =  Store a data on cities table </p>
                    <p>DELETE <i>api/cities/{id}</i> =  Delete data from cities base on the ID </p>
                    <br>

                    <p><h3>Listing working hours</h3></p>
                    <p>GET <i>api/listing_workinghours</i> =  Get all the data in Listing working hours table </p>
                    <p>GET <i>api/listing_workinghours/{id}</i> =  Get the data in Listing working hours base on the ID provided </p>
                    <p>POST <i>api/listing_workinghours</i> =  Store a data on Listing working hours table </p>
                    <p>DELETE <i>api/listing_workinghours/{id}</i> =  Delete data from Listing working hours base on the ID </p>
                    <br>

                    <p><h3>Listing pays</h3></p>
                    <p>GET <i>api/listing_pays</i> =  Get all the data in Listing pays table </p>
                    <p>GET <i>api/listing_pays/{id}</i> =  Get the data in Listing pays base on the ID provided </p>
                    <p>POST <i>api/listing_pays</i> =  Store a data on Listing pays table </p>
                    <p>DELETE <i>api/listing_pays/{id}</i> =  Delete data from Listing pays base on the ID </p>
                    <br>

                    <p><h3>Listing images</h3></p>
                    <p>GET <i>api/listing_images</i> =  Get all the data in Listing images table </p>
                    <p>GET <i>api/listing_images/{id}</i> =  Get the data in Listing images base on the ID provided </p>
                    <p>POST <i>api/listing_images</i> =  Store a data on Listing images table </p>
                    <p>DELETE <i>api/cilisting_imagesties/{id}</i> =  Delete data from Listing images base on the ID </p>
                    <br>

                    <p><h3>Listing payments</h3></p>
                    <p>GET <i>api/listing_payments</i> =  Get all the data in Listing payments table </p>
                    <p>GET <i>api/listing_payments/{id}</i> =  Get the data in Listing payments base on the ID provided </p>
                    <p>POST <i>api/listing_payments</i> =  Store a data on Listing payments table </p>
                    <p>DELETE <i>api/listing_payments/{id}</i> =  Delete data from Listing payments base on the ID </p>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
