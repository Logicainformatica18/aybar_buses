@foreach ($roles as $role)
<div class="form-check">
    <input 
        class="form-check-input" 
        name="roleList[]" 
        type="checkbox" 
        id="flexCheckDefault{{$role->id}}" 
        value="{{$role->id}}" 
        {{ in_array($role->id, $assignedRoles) ? 'checked' : '' }}> <!-- Marcado si está asignado -->

    <label class="form-check-label" for="flexCheckDefault{{$role->id}}">
        {{ $role->name }}
    </label>
</div>
<br>
@endforeach


