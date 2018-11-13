<div class="form-group{{ $errors->has($componentname) ? ' has-error' : '' }}">
    <label class="control-label">{{$componentlabel}}</label>
    <input type="text" name="{{$componentname}}" id="{{$componentid}}" placeholder="{{$componentplaceholder}}" value="{{$componentvalue}}" class="form-control" /> 
    @if ($errors->has($componentname))
            <span class="help-block">
                    <strong>{{ $errors->first($componentname) }}</strong>
            </span>
    @endif

</div>