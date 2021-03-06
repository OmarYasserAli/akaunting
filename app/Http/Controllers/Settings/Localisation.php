<?php

namespace App\Http\Controllers\Settings;

use App\Abstracts\Http\SettingController;
use App\Traits\DateTime;

class Localisation extends SettingController
{
    use DateTime;

    public function edit()
    {
        $timezones = $this->getTimezones();

        $date_formats = [
            'd M Y' => '31 Dec 2017',
            'd F Y' => '31 December 2017',
            'd m Y' => '31 12 2017',
            'm d Y' => '12 31 2017',
            'Y m d' => '2017 12 31',
        ];

        $date_separators = [
            'dash' => trans('settings.localisation.date.dash'),
            'slash' => trans('settings.localisation.date.slash'),
            'dot' => trans('settings.localisation.date.dot'),
            'comma' => trans('settings.localisation.date.comma'),
            'space' => trans('settings.localisation.date.space'),
        ];

        $percent_positions = [
            'before' => trans('settings.localisation.percent.before'),
            'after' => trans('settings.localisation.percent.after'),
        ];

        $discount_locations = [
            'no' => trans('general.disabled'),
            'item' => trans('settings.localisation.discount_location.item'),
            'total' => trans('settings.localisation.discount_location.total'),
            'both' => trans('settings.localisation.discount_location.both'),
        ];

        $financial_denote_options = [
            'begins' => trans('settings.localisation.financial_denote.begins'),
            'ends' => trans('settings.localisation.financial_denote.ends'),
        ];

        return view('settings.localisation.edit', compact(
            'timezones',
            'date_formats',
            'date_separators',
            'percent_positions',
            'discount_locations',
            'financial_denote_options'
        ));
    }
}
