        {* левый столбец *}
        <div id="leftColumn">
            <div id="leftMenu">
                <div class="menuCaption">Меню:</div>
                <ul>
                {foreach $rsCategories as $item}
                    <li>
                        <a href="#">{$item['name']}</a>
                    </li>
                {/foreach}
                </ul>
            </div>
        </div>