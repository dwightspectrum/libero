getSurveyData();

async function getSurveyData () {
    
    const form = new FormData();
    const fetchSurvey = await fetch(`Survey/get_survey`, {
        method: 'POST',
        body: form
    });
    const res = await fetchSurvey.json();
    const data = res.list?.length ? res.list.map((item, index) => (
        `<tr>
            <td>${index + 1}</td>
            <td>${item.postcode}</td>
            <td class="text-center">${item.survey_choice}</td>
            <td>${item.email}</td>
            <td>${item.mobile_number}</td>
            <td><button type="button" data-survey-id="${item.survey_id}" class="btn btn-danger btn-sm delete"><i class="bi bi-trash"></i></button></td>
        </tr>`
    )).join('') : `<tr><td class="text-center" colspan="5">No records found.</td></tr>`

    document.getElementById('survey_table').innerHTML = data;

    const deleteSurvey = document.querySelectorAll('.delete');

    Array.from(deleteSurvey).forEach(element => {
        element.addEventListener('click', async (e) => {
            e.preventDefault();

        const survey_id = e.currentTarget.dataset.surveyId;
        
        const res = await fetch(`Survey/remove_survey/${survey_id}`, {
            method: 'DELETE'
        });

        const data = await res.json();
        if (data.success) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((data) => {
                if (data.isConfirmed) {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                    getSurveyData();
                }
            })
        }
        
        });
    })

     
}

    




    // const res = await fetch(`Survey/remove_survey`, {
    //     method: 'DELETE',
    // });
    // const data = await res.json();
    // if (data.success) {
    //     Swal.fire({
    //         title: 'Are you sure?',
    //         text: "You won't be able to revert this!",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Yes, delete it!'
    //       }).then((data) => {
    //         if (data.isConfirmed) {
    //           Swal.fire(
    //             'Deleted!',
    //             'Your file has been deleted.',
    //             'success'
    //           )
    //         }
    //       })
    // }