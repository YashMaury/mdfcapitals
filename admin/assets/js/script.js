$(function () {
  $(".sparkline_bar").sparkline([2, 4, 3, 4, 5, 4, 5, 3, 4], {
    type: "bar",
    height: 30,
    width: 50,
    barWidth: 4,
    barSpacing: 2,
    colorMap: { 9: "#a1a1a1" },
    barColor: "#0bd02b",
  });
  $(".sparkline_bar31").sparkline([2, 4, 3, 4, 5, 4, 5, 3, 4], {
    type: "bar",
    height: 30,
    width: 50,
    barWidth: 4,
    barSpacing: 2,
    colorMap: { 9: "#a1a1a1" },
    barColor: "#fb5da9",
  });
  const ps12 = new PerfectScrollbar(".setting-scroll", {
    useBothWheelAxes: true,
    suppressScrollX: true,
  });
});
