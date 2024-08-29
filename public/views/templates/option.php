<div class="pcw_option" data-option-id="<%= optionId %>" data-option-cost="<%= optionCost %>">
    <p><%= optionName %></p>
    <p>R$ <%= optionCost %></p>
    <div class="pcw_option_colors"><%= optionColors %></div>
    <div class="pcw_optios_images" style="display: none">
        <canvas class="pcw_canvas pcw_image_front" data-image-url="<%= imageFront %>" image-front-id="<%= optionId %>" style="display: none"></canvas>
        <canvas class="pcw_canvas pcw_image_back" data-image-url="<%= imageBack %>" image-back-id="<%= optionId %>" style="display: none"></canvas>
    </div>
</div>