document.getElementById('update-profile-button').addEventListener('click', function() {
    document.getElementById('update-profile-form').style.display = 'block';
    document.getElementById('update-password-form').style.display = 'none';
    document.getElementById('delete-user-form').style.display = 'none';

    // Cambiar el estilo de los botones
    document.getElementById('update-profile-button').classList.add('font-bold');
    document.getElementById('update-profile-button').classList.remove('font-medium');
    document.getElementById('update-password-button').classList.remove('font-bold');
    document.getElementById('update-password-button').classList.add('font-medium');
    document.getElementById('delete-user-button').classList.remove('font-bold');
    document.getElementById('delete-user-button').classList.add('font-medium');

    // Cambiar el estilo de las barras
    document.getElementById('selected-bar-update-profile').style.backgroundColor = "rgb(81 172 157)";
    document.getElementById('selected-bar-update-password').style.backgroundColor = "rgb(28 28 31)";
    document.getElementById('selected-bar-delete-user').style.backgroundColor = "rgb(28 28 31)";
});

document.getElementById('update-password-button').addEventListener('click', function() {
    document.getElementById('update-profile-form').style.display = 'none';
    document.getElementById('update-password-form').style.display = 'block';
    document.getElementById('delete-user-form').style.display = 'none';

    // Cambiar el estilo de los botones
    document.getElementById('update-profile-button').classList.remove('font-bold');
    document.getElementById('update-profile-button').classList.add('font-medium');
    document.getElementById('update-password-button').classList.add('font-bold');
    document.getElementById('update-password-button').classList.remove('font-medium');
    document.getElementById('delete-user-button').classList.remove('font-bold');
    document.getElementById('delete-user-button').classList.add('font-medium');

    // Cambiar el estilo de las barras
    document.getElementById('selected-bar-update-profile').style.backgroundColor = "rgb(28 28 31)";
    document.getElementById('selected-bar-update-password').style.backgroundColor = "rgb(81 172 157)";
    document.getElementById('selected-bar-delete-user').style.backgroundColor = "rgb(28 28 31)";
});

document.getElementById('delete-user-button').addEventListener('click', function() {
    document.getElementById('update-profile-form').style.display = 'none';
    document.getElementById('update-password-form').style.display = 'none';
    document.getElementById('delete-user-form').style.display = 'block';

    // Cambiar el estilo de los botones
    document.getElementById('update-profile-button').classList.remove('font-bold');
    document.getElementById('update-profile-button').classList.add('font-medium');
    document.getElementById('update-password-button').classList.remove('font-bold');
    document.getElementById('update-password-button').classList.add('font-medium');
    document.getElementById('delete-user-button').classList.add('font-bold');
    document.getElementById('delete-user-button').classList.remove('font-medium');

    // Cambiar el estilo de las barras
    document.getElementById('selected-bar-update-profile').style.backgroundColor = "rgb(28 28 31)";
    document.getElementById('selected-bar-update-password').style.backgroundColor = "rgb(28 28 31)";
    document.getElementById('selected-bar-delete-user').style.backgroundColor = "rgb(81 172 157)";
});
