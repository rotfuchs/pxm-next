export function initClassicFrameset()
{
    interact('.threadViewContainer')
        .draggable({
            onmove: window.dragMoveListener
        })
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


            if(postTreeHeight<=1 || threadViewHeight<=1)
                return;

            // update the element's style
            // target.style.width  = event.rect.width + 'px';
            target.style.height = threadViewHeight + 'vh';
            postTreeContainerEl.style.height = postTreeHeight + 'vh';

            // translate when resizing from top or left edges
            x += event.deltaRect.left;
            y += event.deltaRect.top;

            target.style.webkitTransform = target.style.transform =
                'translate(' + x + 'px,' + y + 'px)';


            console.log();


            target.setAttribute('data-x', x);
            target.setAttribute('data-y', y);
            target.textContent = Math.round(event.rect.width) + '×' + Math.round(event.rect.height);
        });


    function calculateElementHeightPercent(elHeightPxNum)
    {
        let h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

        return Math.round(Math.round(elHeightPxNum)*100/h);
    }
}