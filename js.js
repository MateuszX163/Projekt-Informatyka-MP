//$(document).ready(function()
               // {
        //            $('#button1').click(function()
          //          {
         //           $('#hide1').css('display', 'block');
       //          });

         //           $('#button').click(function()
         //       {
         //           $('#hide').css('display', 'block');
         //        });
         //      });

pages = document.querySelectorAll('.page');
pages.forEach(page => 
    {
        page.querySelector('input').addEventListener('click', e=> {
            let content = page.querySelector('.content');
            console.log(content.classList);
            if(!content.classList.contains('show'))
            {
                content.classList.add('show')
            }
            else
            {
                content.classList.remove('show');
            }
        })
    })