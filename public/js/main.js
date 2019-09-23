
function markasread(notificationCount) {
if (notificationCount !== '0')
   $.get('/markasread');
}
