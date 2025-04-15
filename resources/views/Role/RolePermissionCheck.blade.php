
@foreach ($permissions as $permission)

<div class="form-check">
    <input 
        class="form-check-input" 
        name="permissionList[]" 
        type="checkbox" 
        id="flexCheckDefault{{$permission->id}}" 
        value="{{$permission->id}}" 
        {{ in_array($permission->id, $assignedPermissions) ? 'checked' : '' }}> <!-- Marcado si está asignado -->

    <label class="form-check-label" for="flexCheckDefault{{$permission->id}}">
        {{ $permission->name }}
    </label>
</div>
<br>
@endforeach
