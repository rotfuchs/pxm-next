export function initClassicFrameset()
{
    interact('.threadViewContainer')
        .resizable({
            edges: { bottom: true }
        })
        .on('resizemove', function (event) {
            let target = event.target;
            let x = (parseFloat(target.getAttribute('data-x')) || 0);
            let y = (parseFloat(target.getAttribute('data-y')) || 0);
            let postContainerEl = document.querySelectorAll('.postContainer');
            let postTreeContainerEl = document.querySelectorAll('.postTreeContainer')[0];
            let threadViewHeight = calculateElementHeightPercent(event.rect.height);

            let postHeightPxNum = parseInt(getComputedStyle(postContainerEl[0])['height'].replace('px', ''));
            let postHeight = calculateElementHeightPercent(postHeightPxNum);
            let postTreeHeight = 100 - threadViewHeight - postHeight;



            if(postTreeHeight<1 || threadViewHeight<1)
                return;

            // update the element's style
            // target.style.width  = event.rect.width + 'px';
            // target.style.height = threadViewHeight + 'vh';
            $(target)
                .css('height', threadViewHeight + 'vh')
                .css('min-height', threadViewHeight + 'vh');

            // postTreeContainerEl.style.height = postTreeHeight + 'vh';
            $(postTreeContainerEl)
                .css('height', postTreeHeight + 'vh')
                .css('min-height', postTreeHeight + 'vh');

            // $('.threadViewContainer').find('.wrapper').css('height', threadViewHeight + 'vh');
            // $('.postTreeContainer').find('.wrapper').css('min-height', postTreeHeight + 'vh');
            // $('.postContainer').find('.wrapper').css('min-height', postHeight + 'vh');

            // translate when resizing from top or left edges
            x += event.deltaRect.left;
            y += event.deltaRect.top;

            // target.style.webkitTransform = target.style.transform =
            //     'translate(' + x + 'px,' + y + 'px)';


            target.setAttribute('data-x', x);
            target.setAttribute('data-y', y);
            // target.textContent = Math.round(event.rect.width) + '×' + Math.round(event.rect.height);
        });

    interact('.postContainer')
        .resizable({
            edges: { top: true }
        })
        .on('resizemove', function (event) {
            let target = event.target;
            let x = (parseFloat(target.getAttribute('data-x')) || 0);
            let y = (parseFloat(target.getAttribute('data-y')) || 0);
            let threadViewContainerEl = document.querySelectorAll('.threadViewContainer');
            let postTreeContainerEl = document.querySelectorAll('.postTreeContainer')[0];
            let postViewHeight = calculateElementHeightPercent(event.rect.height);

            let threadHeightPxNum = parseInt(getComputedStyle(threadViewContainerEl[0])['height'].replace('px', ''));
            let threadHeight = calculateElementHeightPercent(threadHeightPxNum);
            let postTreeHeight = 100 - postViewHeight - threadHeight;


            if(postTreeHeight<1 || postViewHeight<1)
                return;

            // update the element's style
            // target.style.width  = event.rect.width + 'px';
            // target.style.height = postViewHeight + 'vh';
            $(target)
                .css('height', postViewHeight + 'vh')
                .css('min-height', postViewHeight + 'vh');

            // postTreeContainerEl.style.height = postTreeHeight + 'vh';
            $(postTreeContainerEl)
                .css('height', postTreeHeight + 'vh')
                .css('min-height', postTreeHeight + 'vh');

            // $('.threadViewContainer').find('.wrapper').css('height', threadHeight + 'vh');
            // $('.postTreeContainer').find('.wrapper').css('min-height', postTreeHeight + 'vh');
            // $('.postContainer').find('.wrapper').css('min-height', postViewHeight + 'vh');

            // translate when resizing from top or left edges
            x += event.deltaRect.left;
            y += event.deltaRect.top;

            // target.style.webkitTransform = target.style.transform =
            //     'translate(' + x + 'px,' + y + 'px)';


            target.setAttribute('data-x', x);
            target.setAttribute('data-y', y);
            // target.textContent = Math.round(event.rect.width) + '×' + Math.round(event.rect.height);
        });


    function calculateElementHeightPercent(elHeightPxNum)
    {
        let h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

        return Math.round(Math.round(elHeightPxNum)*100/h);
    }
}

export function initAdvancedFrameset()
{
    console.log('bla');
}