.tooltip {
 position: relative;
 background: #888;
 border: 4px solid #aaa;
 border-radius: 15px;
}
.tooltip:before, .tooltip:after { /* สไตล์ของรูปสามเหลี่ยมและเงาของมัน */
 position: absolute;
 top: 50%;
 left: 100%;
 width: 0px;
 height: 0px;
 content: "";
 border: solid transparent;
}
.tooltip:after { /* สไตล์ของสามเหลี่ยม */
    border-left-color: #888; 
 border-color: rgba(136, 136, 136, 0);
 border-width: 20px;
 margin-top: -20px;
}
.tooltip:before { /* สไตล์ของเงา */
    border-left-color: #aaa; 
 border-color: rgba(170, 170, 170, 0);
    border-width: 26px; /* ต้องใหญ่กว่าขนาดของรูปสามเหลี่ยม ไม่งั้นจะโดนทับหมด */
    margin-top: -26px;
}