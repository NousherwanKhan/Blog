
<?php

if (!function_exists('countries')) {
    function countries()
    {
        $countries = '<option>select country</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                   <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>';
        return $countries;
    }
}
