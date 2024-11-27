{block name="title" prepend}{$LNG.lm_info}{/block}
{block name="content"}
    <div id="information" class="popup">
        <style>
            .popup {
                width: 480px;
                height: 200px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background: rgba(211, 211, 145, 1);
				padding-left: 20px; /* Padding only for the left */
            }

            #slider {
                width: 90%;
				padding: 10px;
            }
			
			button {
				padding: 10px 20px;
				margin: 0 10px;
				font-size: 1em;
				border: none;
				cursor: pointer;
			}

            .top-left-container {
				font-family: Verdana, sans-serif;
				font-size: 10px;
				font-weight: 400;
				height: auto;
				line-height: 14px;
				text-align: center;
				text-indent: 0px;
				text-size-adjust: 100%;
                position: fixed;
                top: 0;
                left: 0;
                padding: 10px;
            }
			.center-container {
			    font-family: Verdana, sans-serif;
				font-size: 10px;
				font-weight: 400;
				height: auto;
				line-height: 14px;
				text-align: center;
				text-indent: 0px;
				text-size-adjust: 100%;
                padding-top: 10px; /* Only the top padding */
            }
            .button-container {
				font-family: Verdana, sans-serif;
				font-size: 10px;
				font-weight: 400;
				height: auto;
				line-height: 14px;
				text-align: center;
				text-indent: 0px;
				text-size-adjust: 100%;
                padding: 10px;
				padding-top: 30px; /* Only the top padding */
            }
			
			#sliderValue {
				font-weight: bold;
			}

			#timeText {
				font-style: italic;
			}
        </style>

        <div class="top-left-container">
            <h3>当前剩余{$darkmatter}钻石</h3>
        </div>
        <div class="center-container">
			<h3>使用<span id="sliderValue">0</span>钻石 加速<span id="timeText">0天0时0分0秒</span></h3>
		</div>
		<input type="range" id="slider" min="0" step="1" max="{$availableDarkmatter}" value="0" oninput="updateSliderValue(this.value)">
        <div class="button-container">
            <button onclick="onOKClick()">确定</button>
            <button onclick="onCancelClick()">取消</button>
        </div>

    </div>
    <script>
        function formatSeconds(seconds) {
            seconds = Number(seconds);
            let d = Math.floor(seconds / (3600*24));
            let h = Math.floor(seconds % (3600*24) / 3600);
            let m = Math.floor(seconds % 3600 / 60);
            let s = Math.floor(seconds % 60);
            return d + "天" +  h + "时" + m + "分" +  s + "秒";
        }

        function updateSliderValue(value) {
            let speedUpSecondsPerDiamond = {$speed_up_seconds};
            let totalSeconds = speedUpSecondsPerDiamond * value;
            let timeText = formatSeconds(totalSeconds);
            $('#timeText').text(timeText);
            $('#sliderValue').text(value);
        }

        function onOKClick() {

            let from = '{$from}';
            $.post("game.php?page=speedup&from="+from, { diamond:  $('#slider').val() }, function (response) {
                if (response.code == 0) {
                    parent.location.reload();
                    parent.$.fancybox.close();
                } else {
                    alert(response.msg);
                }
            }, "json");
        }

        function onCancelClick() {
            parent.$.fancybox.close();
        }
    </script>
{/block}