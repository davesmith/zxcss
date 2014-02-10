/*
//  BaseUp IE lte 8
*/

.col {
    _display:inline; /* 1 */
    _word-wrap:break-word; /* 2 */
    _overflow:hidden; /* 3 */
    *margin-right:-1px; /* 4 */
}

.cols > * {
    *margin-right:-1px; /* 4 */
}
/*  1. Fix the double margin float bug in IE 6
//  2. Prevent unbroken strings of text and URLs breaking the layout in IE 6
//  3. Prevent images wider than the column width breaking the layout in IE 6
//  4. Account for pixel-rounding of percentages in IE 6 and 7
//  Note I'm using the underscore hack to target IE 6
*/


/*  - Fix for a text-indent bug in IE 7
//    If text-indent is added to . and the column butts up against the viewport
//    then the amount of text-indent overflows and causes the scrollbar to appear
//
//  I am commenting this fix out as text-indent is fairly rare and I'd prefer to use overflow:hidden 
//  as little as possible, but am keeping it here for future reference
//
//.,
//. {overflow:hidden;}
*/

/* Do this or do nothing and let the layout wrap, maybe let the layout wrap, or only use guts-fw for broadest compatibility */
.guts {*margin-left:0!important;*margin-right:0!important;}
.guts > * {*padding-left:0!important;*padding-right:0!important;}

.lay,
.lay-left,
.lay-right,
.lay-centered {display:inline-block;}
.lay,
.lay-left,
.lay-right,
.lay-centered {display:block;}
/*  - Trigger hasLayout to fix layout issues in IE 6 and 7
*/


/*  - Pull Gut and Pull Gut Right
* /
.pull-gut-left-small,
.pull-gut-left-medium,
.pull-gut-left-large,
.pull-gut-left-1x, .pull-gut-left-2x, .pull-gut-left-3x, .pull-gut-left-4x, .pull-gut-left-5x, .pull-gut-left-6x, .pull-gut-left-7x, .pull-gut-left-8x, .pull-gut-left-9x, .pull-gut-left-10x, .pull-gut-left-11x, .pull-gut-left-12x
{display:inline-block;}

.pull-gut-right-small,
.pull-gut-right-medium,
.pull-gut-right-large,
.pull-gut-right-1x, .pull-gut-right-2x, .pull-gut-right-3x, .pull-gut-right-4x, .pull-gut-right-5x, .pull-gut-right-6x, .pull-gut-right-7x, .pull-gut-right-8x, .pull-gut-right-9x, .pull-gut-right-10x, .pull-gut-right-11x, .pull-gut-right-12x
{display:inline-block;}

.pull-gut-left-small,
.pull-gut-left-medium,
.pull-gut-left-large,
.pull-gut-left-1x, .pull-gut-left-2x, .pull-gut-left-3x, .pull-gut-left-4x, .pull-gut-left-5x, .pull-gut-left-6x, .pull-gut-left-7x, .pull-gut-left-8x, .pull-gut-left-9x, .pull-gut-left-10x, .pull-gut-left-11x, .pull-gut-left-12x
{display:block;}

.pull-gut-right-small,
.pull-gut-right-medium,
.pull-gut-right-large,
.pull-gut-right-1x, .pull-gut-right-2x, .pull-gut-right-3x, .pull-gut-right-4x, .pull-gut-right-5x, .pull-gut-right-6x, .pull-gut-right-7x, .pull-gut-right-8x, .pull-gut-right-9x, .pull-gut-right-10x, .pull-gut-right-11x, .pull-gut-right-12x
{display:block;}
.pull-gut-left-small-1up,
.pull-gut-left-medium-1up,
.pull-gut-left-large-1up,
.pull-gut-left-1x-1up, .pull-gut-left-2x-1up, .pull-gut-left-3x-1up, .pull-gut-left-4x-1up, .pull-gut-left-5x-1up, .pull-gut-left-6x-1up, .pull-gut-left-7x-1up, .pull-gut-left-8x-1up, .pull-gut-left-9x-1up, .pull-gut-left-10x-1up, .pull-gut-left-11x-1up, .pull-gut-left-12x-1up
{display:inline-block;}

.pull-gut-right-small-1up,
.pull-gut-right-medium-1up,
.pull-gut-right-large-1up,
.pull-gut-right-1x-1up, .pull-gut-right-2x-1up, .pull-gut-right-3x-1up, .pull-gut-right-4x-1up, .pull-gut-right-5x-1up, .pull-gut-right-6x-1up, .pull-gut-right-7x-1up, .pull-gut-right-8x-1up, .pull-gut-right-9x-1up, .pull-gut-right-10x-1up, .pull-gut-right-11x-1up, .pull-gut-right-12x-1up
{display:inline-block;}

.pull-gut-left-small-1up,
.pull-gut-left-medium-1up,
.pull-gut-left-large-1up,
.pull-gut-left-1x-1up, .pull-gut-left-2x-1up, .pull-gut-left-3x-1up, .pull-gut-left-4x-1up, .pull-gut-left-5x-1up, .pull-gut-left-6x-1up, .pull-gut-left-7x-1up, .pull-gut-left-8x-1up, .pull-gut-left-9x-1up, .pull-gut-left-10x-1up, .pull-gut-left-11x-1up, .pull-gut-left-12x-1up
{display:block;}

.pull-gut-right-small-1up,
.pull-gut-right-medium-1up,
.pull-gut-right-large-1up,
.pull-gut-right-1x-1up, .pull-gut-right-2x-1up, .pull-gut-right-3x-1up, .pull-gut-right-4x-1up, .pull-gut-right-5x-1up, .pull-gut-right-6x-1up, .pull-gut-right-7x-1up, .pull-gut-right-8x-1up, .pull-gut-right-9x-1up, .pull-gut-right-10x-1up, .pull-gut-right-11x-1up, .pull-gut-right-12x-1up
{display:block;}
.pull-gut-left-small-2up,
.pull-gut-left-medium-2up,
.pull-gut-left-large-2up,
.pull-gut-left-1x-2up, .pull-gut-left-2x-2up, .pull-gut-left-3x-2up, .pull-gut-left-4x-2up, .pull-gut-left-5x-2up, .pull-gut-left-6x-2up, .pull-gut-left-7x-2up, .pull-gut-left-8x-2up, .pull-gut-left-9x-2up, .pull-gut-left-10x-2up, .pull-gut-left-11x-2up, .pull-gut-left-12x-2up
{display:inline-block;}

.pull-gut-right-small-2up,
.pull-gut-right-medium-2up,
.pull-gut-right-large-2up,
.pull-gut-right-1x-2up, .pull-gut-right-2x-2up, .pull-gut-right-3x-2up, .pull-gut-right-4x-2up, .pull-gut-right-5x-2up, .pull-gut-right-6x-2up, .pull-gut-right-7x-2up, .pull-gut-right-8x-2up, .pull-gut-right-9x-2up, .pull-gut-right-10x-2up, .pull-gut-right-11x-2up, .pull-gut-right-12x-2up
{display:inline-block;}

.pull-gut-left-small-2up,
.pull-gut-left-medium-2up,
.pull-gut-left-large-2up,
.pull-gut-left-1x-2up, .pull-gut-left-2x-2up, .pull-gut-left-3x-2up, .pull-gut-left-4x-2up, .pull-gut-left-5x-2up, .pull-gut-left-6x-2up, .pull-gut-left-7x-2up, .pull-gut-left-8x-2up, .pull-gut-left-9x-2up, .pull-gut-left-10x-2up, .pull-gut-left-11x-2up, .pull-gut-left-12x-2up
{display:block;}

.pull-gut-right-small-2up,
.pull-gut-right-medium-2up,
.pull-gut-right-large-2up,
.pull-gut-right-1x-2up, .pull-gut-right-2x-2up, .pull-gut-right-3x-2up, .pull-gut-right-4x-2up, .pull-gut-right-5x-2up, .pull-gut-right-6x-2up, .pull-gut-right-7x-2up, .pull-gut-right-8x-2up, .pull-gut-right-9x-2up, .pull-gut-right-10x-2up, .pull-gut-right-11x-2up, .pull-gut-right-12x-2up
{display:block;}

/*  - Fix for .clear to work when placed after positional floats in IE 6 and 7
//    MS CSS Expressions were used to keep all the fixes in one asset 
//    and out of the way.
//    Dynamically added div.clear elements are also fixed.
//  - Note clear must not have hasLayout triggered otherwise the fix will fail
//  - Note Positional floats can also be cleared with a wrapping .lay element
*/
.clear-ie6and7fixp1 {float:left;width:100%;height:0;overflow:hidden;}
.clear-ie6and7fixp2 {clear:both;height:0;overflow:hidden;}
.clear {
    rizzlecssproperty:expression(
        (function(self) {
            // Ensure any real action is done only once
            if (!self['rizzlecsspropertything2']) {
                self['rizzlecsspropertything2']=1;
                self.innerHTML = '<div class="clear-ie6and7fixp1"></div><div class="clear-ie6and7fixp2"></div>'+self.innerHTML;
            }
            return 'none';
        }(this))
    );
}


/*  - Fix for .lay .lay-left, lay-right and .lay-centered to ensure positional
//    floats display as expected in IE 6
//  - Aside, didn't realise until now that I could assign an expression to any 
//    old made-up property, which saves overwriting useful/used ones
*/
.lay-ie6fix {float:left;width:100%;}
* html .lay,
* html .lay-left,
* html .lay-right,
* html .lay-centered {
    rizzlecssproperty:expression(
        (function(self) {
            // Ensure any real action is done only once
            if (!self['rizzlecsspropertything']) {
                self['rizzlecsspropertything']=1;
                self.innerHTML = '<div class="lay-ie6fix">'+self.innerHTML+'</div>';
            }
            return 'none';
        }(this))
    );
}
/*    Employing star hack to target IE 6 only. The underscore hack didn't hack-it.
//    Thanks http://stackoverflow.com/questions/247743/evaluate-a-css-expression-only-in-ie7-w-out-using-conditional-comments
*/



/*  - IE 7 background repaint bug
//    This bug happens when positional floats are used and a background has been 
//    applied to an ancestor element of the layout. The layout may show correctly 
//    on page load but on scrolling the become lost or patchy. Thankfully I found 
//    a solution: to trigger hasLayout on the ancestor element with the background.
//  
//  - IE 7 pixel-rounding bug
//    Happens when using positional floats where the layout is flush with the edge of 
//    the viewport and the layout hasn't been wrapped in a div.lay. Solve by wrapping
//    the layout in a div.lay.
*/
