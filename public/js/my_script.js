
document.getElementById('name').addEventListener('input', function() {
    localStorage.setItem('name', document.getElementById('name').value);
});
document.getElementById('email').addEventListener('input', function() {
    localStorage.setItem('email', document.getElementById('email').value);
});
document.getElementById('phone').addEventListener('input', function() {
    localStorage.setItem('phone', document.getElementById('phone').value);
});
document.getElementById('message').addEventListener('input', function() {
    localStorage.setItem('message', document.getElementById('message').value);
});

document.addEventListener('DOMContentLoaded', function() {
    if (performance.navigation.type === performance.navigation.TYPE_RELOAD) {
        localStorage.removeItem('name');
        localStorage.removeItem('email');
        localStorage.removeItem('phone');
        localStorage.removeItem('message');
    }

    if (localStorage.getItem('name')) {
        document.getElementById('name').value = localStorage.getItem('name');
    }
    if (localStorage.getItem('email')) {
        document.getElementById('email').value = localStorage.getItem('email');
    }
    if (localStorage.getItem('phone')) {
        document.getElementById('phone').value = localStorage.getItem('phone');
    }
    if (localStorage.getItem('message')) {
        document.getElementById('message').value = localStorage.getItem(
            'message');
    }
});

