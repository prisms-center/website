<nav class="w-full max-w-screen mx-auto px-4">
    <div class="flex mt-6 py-3 px-2 border-b border-grey">
        {{--<div class="hidden lg:block lg:w-1/6 mr-6" style="background-color:#4e89bd; padding:2px">--}}
            {{--<a href="{{ route('home') }}">--}}
                {{--<img class="banner" src="/images/prisms-logo.png">--}}
                {{--@include('layouts.application.logo', ['class' => 'w-32'])--}}
            {{--</a>--}}
        {{--</div>--}}
        <div class="flex flex-auto justify-between items-center">
            <ul class="list-reset flex pr-4">
                <li>
                    <a href="{{ $page->asset_prefix }}/" class="flex items-center no-underline text-grey-darker group hover:text-black mr-10">
                        {{--@include('assets.icons.services', ['class' => 'w-6 h-6 text-primary mr-2 group-hover:text-primary'])--}}
                        <span class="font-bold text-black">PRiSMS Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->asset_prefix }}/science/" class="flex items-center no-underline text-grey-darker group hover:text-black mr-10">
                        {{--@include('assets.icons.cog', ['class' => 'w-6 h-6 text-grey-dark mr-2 group-hover:text-primary'])--}}
                        <span>Science</span>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->asset_prefix }}/tools" class="flex items-center no-underline text-grey-darker group hover:text-black mr-10">
                        {{--@include('assets.icons.billing', ['class' => 'w-6 h-6 text-grey-dark mr-2 group-hover:text-primary'])--}}
                        <span>Tools</span>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->asset_prefix }}/materialscommons" class="flex items-center no-underline text-grey-darker group hover:text-black mr-10">
                        {{--@include('assets.icons.billing', ['class' => 'w-6 h-6 text-grey-dark mr-2 group-hover:text-primary'])--}}
                        <span>MaterialsCommons</span>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->asset_prefix }}/people" class="flex items-center no-underline text-grey-darker group hover:text-black mr-10">
                        {{--@include('assets.icons.billing', ['class' => 'w-6 h-6 text-grey-dark mr-2 group-hover:text-primary'])--}}
                        <span>People</span>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->asset_prefix }}/publications" class="flex items-center no-underline text-grey-darker group hover:text-black mr-10">
                        {{--@include('assets.icons.billing', ['class' => 'w-6 h-6 text-grey-dark mr-2 group-hover:text-primary'])--}}
                        <span>Publications</span>
                    </a>
                </li>
                <li>
                    <a href="{{ $page->asset_prefix }}/community" class="flex items-center no-underline text-grey-darker group hover:text-black mr-10">
                        {{--@include('assets.icons.billing', ['class' => 'w-6 h-6 text-grey-dark mr-2 group-hover:text-primary'])--}}
                        <span>Community</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
