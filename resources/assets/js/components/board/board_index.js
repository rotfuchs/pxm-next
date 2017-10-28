export function initEvents()
{
    initUserProfileWindow();

    function initUserProfileWindow()
    {
        let userLinks = $('#boardTable').find('.mods a');
        let popup;
        let userId;

        userLinks.on('click', function(e) {
            e.preventDefault();

            userId = $(this).data('id');

            popup = window.open('/user/id/'+userId+'/layout/new_window','profile','width=655,height=620,scrolling=auto,scrollbars=1,resizable=0');
            popup.focus();
        });
    }
}