const changePass = 'change_pass';

document.getElementById(changePass).addEventListener('submit', async (e) => {
    e.preventDefault();

    const form = new FormData();

    const res = await fetch(`Profile/change_pass`, {
        method: 'POST',
        body: form
    });

    const data = await res.json();
    if (data.success) {
        Swal.fire({
            icon: 'success',
            title: 'Congratulations!',
            text: `${data.message}`,
        })
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Update Error',
            text: `${data.message}`,
        })
    }
   
});