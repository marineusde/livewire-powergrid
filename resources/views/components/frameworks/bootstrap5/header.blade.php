<div class="dt--top-section">
    <div class="row">
        <div class="col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center">
            @include(powerGridThemeRoot().'.header.export')
            @include(powerGridThemeRoot().'.header.toggle-columns')
            @include(powerGridThemeRoot().'.header.loading')
        </div>
        <div class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3">
            @include(powerGridThemeRoot().'.header.filter')
        </div>
    </div>
</div>
@include(powerGridThemeRoot().'.header.batch-exporting')
@include(powerGridThemeRoot().'.header.enabled-filters')




