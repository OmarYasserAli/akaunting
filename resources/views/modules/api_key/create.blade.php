<x-layouts.admin>
    <x-slot name="title">
        {{ trans('modules.api_key') }}
    </x-slot>

    <x-slot name="content">
        <x-form id="form-app" route="apps.api-key.store">
            <div class="w-1/2">
                <div class="py-8 flex flex-col gap-2">
                    <x-form.group.text name="api_key" placeholder="{{ trans('general.form.enter', ['field' => trans('modules.api_key')]) }}" value="{{ setting('apps.api_key', null) }}" />

                    <div class="text-xs">
                        {!! trans('modules.get_api_key', ['url' => 'https://akaunting.com/dashboard']) !!}
                    </div>
                </div>

                <div>
                    <x-form.buttons cancel-route="apps.home.index" without-cancel />
                </div>
            </div>
        </x-form>
    </x-slot>

    <x-script folder="modules" file="apps" />
</x-layouts.admin>
