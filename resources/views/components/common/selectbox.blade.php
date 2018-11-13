<div class="form-group{{ $errors->has($componentname) ? ' has-error' : '' }}">
        <label class="control-label">{{$componentlabel}}</label>
        <select name="{{$componentname}}" id="{{$componentid}}" placeholder="{{$componentplaceholder}}"  class="form-control">
        @if (isset($componentvalue))
        	@foreach($componentvalue as $option)
        	<option value="{{$option['id']}}" {{(isset($option['selected']) && $option['selected']===true)?'selected="selected"':''}}>{{ $option['name'] }}</option>
        	@endforeach
        @endif
        </select>
        @if ($errors->has($componentname))
                <span class="help-block">
                        <strong>{{ $errors->first($componentname) }}</strong>
                </span>
        @endif
</div>

@push('componentscripts')
<script type="text/javascript">
$(function(){
    $("#{{$componentid}}").select2({
        @if (isset($componenturl))
        ajax: {
            url: "{{$componenturl}}",
            dataType: 'json',
            data: function(params) {

                @if(isset($customdatascript))
                {!! $customdatascript !!}
                @endif

                params.q = params.term;
                return params;
            },
            processResults: function (data, params) {
                return {
                    results: data,
                };
            }
        }
        @endif
    });
});
</script>
@endpush
