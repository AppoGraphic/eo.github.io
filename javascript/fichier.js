function menu()
{
divInfo = document.getElementById('menuBox');
if (divInfo.style.display == 'block')
divInfo.style.display = 'none';
else
divInfo.style.display = 'block';
}

function search()
{
divInfo = document.getElementById('searchSection');
if (divInfo.style.display == 'block')
divInfo.style.display = 'none';
else
divInfo.style.display = 'block';


searchIcone = document.getElementById('searchIconenav');
if (searchIcone.style.display == 'none')
searchIcone.style.display = 'inline-block';
else
searchIcone.style.display = 'none';
}