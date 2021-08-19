<?php

use App\Models\Partner;





function getPartners(){

    return Partner::with('partnerSection')->get();
}
