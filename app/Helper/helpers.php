<?php

use App\Models\Partner;

use App\Models\Blogs;





function getPartners(){

    return Partner::with('partnerSection')->get();
}

function getBlogs(){

    return Blogs::with('blogs')->get();
}
