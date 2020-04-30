@role('administrator')
    <p>This is visible to users with the admin role. Gets translated to
    \Laratrust::hasRole('administrator')</p>
@endrole

@permission('manage-admins')
    <p>This is visible to users with the given permissions. Gets translated to
    \Laratrust::can('manage-admins'). The @can directive is already taken by core
    laravel authorization package, hence the @permission directive instead.</p>
@endpermission

@ability('administrator,owner', 'create-post,edit-user')
    <p>This is visible to users with the given abilities. Gets translated to
    \Laratrust::ability('administrator,owner', 'create-post,edit-user')</p>
@endability

@canAndOwns('edit-post', $post)
    <p>This is visible if the user has the permission and owns the object. Gets translated to
    \Laratrust::canAndOwns('edit-post', $post)</p>
@endOwns

@hasRoleAndOwns('administrator', $post)
    <p>This is visible if the user has the role and owns the object. Gets translated to
    \Laratrust::hasRoleAndOwns('administrator', $post)</p>
@endOwns