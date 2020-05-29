<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

const PERFECT_MONEY = '[{
    "type": "flex",
    "altText": "perfectmoney",
    "contents": {
        "type": "carousel",
        "contents": [{
                "type": "bubble",
                "body": {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [{
                            "type": "image",
                            "url": "https://fsexchanger.files.wordpress.com/2020/04/tomswallpapers.com-109478.jpg",
                            "size": "full",
                            "aspectMode": "cover",
                            "gravity": "center",
                            "aspectRatio": "2:3"
                        },
                        {
                            "type": "image",
                            "url": "https://fsexchanger.files.wordpress.com/2020/05/bg0000-1.png",
                            "position": "absolute",
                            "align": "center",
                            "gravity": "center",
                            "size": "full",
                            "aspectRatio": "2:3",
                            "aspectMode": "cover",
                            "offsetTop": "0px",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [{
                                    "type": "spacer",
                                    "size": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                        "type": "image",
                                        "url": "https://indiaemoney.com//assets/imgs/perfectmoney.png",
                                        "size": "3xl",
                                        "align": "center",
                                        "gravity": "center",
                                        "aspectRatio": "6:1",
                                        "aspectMode": "fit"
                                    }],
                                    "offsetTop": "0px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [{
                                                "type": "text",
                                                "text": "ราคาที่รับซื้อ",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "bold",
                                                "align": "center"
                                            },
                                            {
                                                "type": "spacer",
                                                "size": "md"
                                            }
                                        ]
                                    }],
                                    "spacing": "sm",
                                    "margin": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ดอลลาร์สหรัฐฯ",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ไทยบาท",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$100 - $500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 25.00",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px",
                                            "width": "40%"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$501 - $1,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 25.50",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,001 - $1,500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 26.00",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,501 - $2,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 26.50",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$2,001 - $10,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 27.50",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "button",
                                                "action": {
                                                    "type": "uri",
                                                    "label": "แจ้งโอนขายเหรียญ",
                                                    "uri": "line://app/1654168555-vKg3wqZZ",
                                                    "altUri": {
                                                        "desktop": "https://liff.line.me/1654168555-vKg3wqZZ"
                                                    }
                                                },
                                                "offsetTop": "0px",
                                                "offsetBottom": "0px",
                                                "offsetStart": "0px",
                                                "offsetEnd": "0px",
                                                "gravity": "center",
                                                "style": "link",
                                                "height": "sm",
                                                "margin": "none",
                                                "color": "#ffffff"
                                            }],
                                            "borderColor": "#ffffff",
                                            "cornerRadius": "4px",
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "paddingAll": "0px",
                                            "spacing": "none",
                                            "margin": "none",
                                            "borderWidth": "1px",
                                            "backgroundColor": "#cc0000aa"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                    "type": "spacer",
                                                    "size": "xl"
                                                },
                                                {
                                                    "type": "text",
                                                    "text": "สงวนลิขสิทธิ์ พ.ศ.2560 FS-EXCHANGER",
                                                    "size": "xxs",
                                                    "color": "#cc0000cc",
                                                    "align": "center",
                                                    "gravity": "center",
                                                    "weight": "regular",
                                                    "style": "italic"
                                                }
                                            ],
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetBottom": "0px",
                                            "spacing": "none",
                                            "margin": "none"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "xxl"
                                }
                            ],
                            "position": "absolute",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "backgroundColor": "#e6e6e699",
                            "paddingAll": "12px",
                            "offsetTop": "0px",
                            "paddingTop": "16px"
                        }
                    ],
                    "paddingAll": "0px"
                }
            },
            {
                "type": "bubble",
                "body": {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [{
                            "type": "image",
                            "url": "https://fsexchanger.files.wordpress.com/2015/08/free-money-course-white.gif",
                            "size": "full",
                            "aspectMode": "cover",
                            "gravity": "top",
                            "aspectRatio": "2:3"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [{
                                "type": "image",
                                "url": "https://www.tradingpedia.com/wp-content/uploads/Ads/webmoney1.png",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "2:3",
                                "offsetTop": "0px",
                                "offsetStart": "0px",
                                "offsetBottom": "0px",
                                "offsetEnd": "0px",
                                "gravity": "center"
                            }],
                            "offsetTop": "0px",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "position": "absolute"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [{
                                    "type": "spacer",
                                    "size": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                        "type": "image",
                                        "url": "https://indiaemoney.com//assets/imgs/perfectmoney.png",
                                        "size": "3xl",
                                        "align": "center",
                                        "gravity": "center",
                                        "aspectRatio": "6:1",
                                        "aspectMode": "cover"
                                    }],
                                    "offsetTop": "0px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [{
                                                "type": "text",
                                                "text": "ราคาขาย",
                                                "size": "md",
                                                "color": "#cc0000aa",
                                                "weight": "bold",
                                                "align": "center"
                                            },
                                            {
                                                "type": "spacer",
                                                "size": "md"
                                            }
                                        ]
                                    }],
                                    "margin": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ดอลลาร์สหรัฐฯ",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ไทยบาท",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$100 - $500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 34.50",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px",
                                            "width": "40%"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$501 - $1,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 34.00",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,001 - $1,500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 33.75",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,501 - $2,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 33.50",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$2,001 - $10,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#cc0000",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#cc0000aa",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 33.25",
                                                "size": "md",
                                                "color": "#cc0000cc",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#cc0000cc",
                                            "cornerRadius": "4px",
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "button",
                                                "action": {
                                                    "type": "uri",
                                                    "label": "แจ้งโอนซื้อเหรียญ",
                                                    "uri": "line://app/1654168555-O4AV6YRR",
                                                    "altUri": {
                                                        "desktop": "https://liff.line.me/1654168555-O4AV6YRR"
                                                    }
                                                },
                                                "offsetTop": "0px",
                                                "offsetBottom": "0px",
                                                "offsetStart": "0px",
                                                "offsetEnd": "0px",
                                                "gravity": "center",
                                                "style": "link",
                                                "height": "sm",
                                                "margin": "none",
                                                "color": "#ffffff"
                                            }],
                                            "borderColor": "#ffffff",
                                            "cornerRadius": "4px",
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "paddingAll": "0px",
                                            "spacing": "none",
                                            "margin": "none",
                                            "borderWidth": "1px",
                                            "backgroundColor": "#cc0000aa"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                    "type": "spacer",
                                                    "size": "xl"
                                                },
                                                {
                                                    "type": "text",
                                                    "text": "สงวนลิขสิทธิ์ พ.ศ.2560 FS-EXCHANGER",
                                                    "size": "xxs",
                                                    "color": "#cc0000cc",
                                                    "align": "center",
                                                    "gravity": "center",
                                                    "weight": "regular",
                                                    "style": "italic"
                                                }
                                            ],
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetBottom": "0px",
                                            "spacing": "none",
                                            "margin": "none"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "xxl"
                                }
                            ],
                            "position": "absolute",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "backgroundColor": "#e6e6e6aa",
                            "paddingAll": "12px",
                            "offsetTop": "0px",
                            "paddingTop": "16px"
                        }
                    ],
                    "paddingAll": "0px"
                }
            }
        ]
    }
}]';

const NETELLER = '[{
    "type": "flex",
    "altText": "neteller",
    "contents": {
        "type": "carousel",
        "contents": [{
                "type": "bubble",
                "body": {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [{
                            "type": "image",
                            "url": "https://fsexchanger.files.wordpress.com/2020/04/r26-1.jpg",
                            "size": "full",
                            "aspectMode": "cover",
                            "gravity": "top",
                            "aspectRatio": "2:3"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [{
                                "type": "image",
                                "url": "https://fsexchanger.files.wordpress.com/2020/05/bg0000-2.png",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "2:3",
                                "offsetTop": "0px",
                                "offsetStart": "0px",
                                "offsetBottom": "0px",
                                "offsetEnd": "0px",
                                "gravity": "center",
                                "align": "center"
                            }],
                            "offsetTop": "0px",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "position": "absolute"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [{
                                    "type": "spacer",
                                    "size": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                        "type": "image",
                                        "url": "https://wikiwallet.com/dist/images/neteller_header_fx.png",
                                        "size": "xl",
                                        "align": "center",
                                        "gravity": "center",
                                        "aspectRatio": "4:1",
                                        "aspectMode": "cover"
                                    }],
                                    "offsetTop": "0px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [{
                                                "type": "text",
                                                "text": "ราคาที่รับซื้อ",
                                                "size": "md",
                                                "color": "#e6e6e6",
                                                "weight": "bold",
                                                "align": "center"
                                            },
                                            {
                                                "type": "spacer",
                                                "size": "md"
                                            }
                                        ]
                                    }],
                                    "spacing": "sm",
                                    "margin": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ดอลลาร์สหรัฐฯ",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#133a13",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ไทยบาท",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$100 - $500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#133a13",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 25.00",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px",
                                            "width": "40%"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$501 - $1,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#133a13",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 25.50",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,001 - $1,500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#133a13",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 26.00",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,501 - $2,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#133a13",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 26.50",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$2,001 - $10,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#03303A",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 27.50",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13cc",
                                            "cornerRadius": "4px",
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "button",
                                                "action": {
                                                    "type": "uri",
                                                    "label": "แจ้งโอนขายเหรียญ",
                                                    "uri": "line://app/1654168555-vKg3wqZZ",
                                                    "altUri": {
                                                        "desktop": "https://liff.line.me/1654168555-vKg3wqZZ"
                                                    }
                                                },
                                                "offsetTop": "0px",
                                                "offsetBottom": "0px",
                                                "offsetStart": "0px",
                                                "offsetEnd": "0px",
                                                "gravity": "center",
                                                "style": "link",
                                                "height": "sm",
                                                "margin": "none",
                                                "color": "#ffffff"
                                            }],
                                            "borderColor": "#ffffff",
                                            "cornerRadius": "4px",
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "paddingAll": "0px",
                                            "spacing": "none",
                                            "margin": "none",
                                            "borderWidth": "1px",
                                            "backgroundColor": "#133a13cc"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                    "type": "spacer",
                                                    "size": "xl"
                                                },
                                                {
                                                    "type": "text",
                                                    "text": "สงวนลิขสิทธิ์ พ.ศ.2560 FS-EXCHANGER",
                                                    "size": "xxs",
                                                    "color": "#e6e6e6",
                                                    "align": "center",
                                                    "gravity": "center",
                                                    "weight": "regular",
                                                    "style": "italic"
                                                }
                                            ],
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetBottom": "0px",
                                            "spacing": "none",
                                            "margin": "none"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "xxl"
                                }
                            ],
                            "position": "absolute",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "backgroundColor": "#267326aa",
                            "paddingAll": "12px",
                            "offsetTop": "0px",
                            "paddingTop": "16px"
                        }
                    ],
                    "paddingAll": "0px"
                }
            },
            {
                "type": "bubble",
                "body": {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [{
                            "type": "image",
                            "url": "https://fsexchanger.files.wordpress.com/2015/08/free-money-course-white.gif",
                            "size": "full",
                            "aspectMode": "cover",
                            "gravity": "top",
                            "aspectRatio": "2:3"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [{
                                "type": "image",
                                "url": "https://fsexchanger998477843.files.wordpress.com/2020/05/bg00133-e1588704618700.png",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "2:3",
                                "offsetTop": "0px",
                                "offsetStart": "0px",
                                "offsetBottom": "0px",
                                "offsetEnd": "0px",
                                "gravity": "top"
                            }],
                            "offsetTop": "0px",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "position": "absolute"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [{
                                    "type": "spacer",
                                    "size": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                        "type": "image",
                                        "url": "https://wikiwallet.com/dist/images/neteller_header_fx.png",
                                        "size": "xl",
                                        "align": "center",
                                        "gravity": "center",
                                        "aspectRatio": "4:1",
                                        "aspectMode": "cover"
                                    }],
                                    "offsetTop": "0px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [{
                                                "type": "text",
                                                "text": "ราคาขาย",
                                                "size": "md",
                                                "color": "#e6e6e6",
                                                "weight": "bold",
                                                "align": "center"
                                            },
                                            {
                                                "type": "spacer",
                                                "size": "md"
                                            }
                                        ]
                                    }],
                                    "margin": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ดอลลาร์สหรัฐฯ",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#133a13",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ไทยบาท",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$100 - $500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#133a13",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 34.50",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px",
                                            "width": "40%"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$501 - $1,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#133a13",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 34.00",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,001 - $1,500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#133a13",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 33.75",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13cc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,501 - $2,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#133a13",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 33.50",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$2,001 - $10,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#133a13",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#133a13cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 33.25",
                                                "size": "md",
                                                "color": "#133a13",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#133a13cc",
                                            "cornerRadius": "4px",
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "button",
                                                "action": {
                                                    "type": "uri",
                                                    "label": "แจ้งโอนซื้อเหรียญ",
                                                    "uri": "line://app/1654168555-O4AV6YRR",
                                                    "altUri": {
                                                        "desktop": "https://liff.line.me/1654168555-O4AV6YRR"
                                                    }
                                                },
                                                "offsetTop": "0px",
                                                "offsetBottom": "0px",
                                                "offsetStart": "0px",
                                                "offsetEnd": "0px",
                                                "gravity": "center",
                                                "style": "link",
                                                "height": "sm",
                                                "margin": "none",
                                                "color": "#ffffff"
                                            }],
                                            "borderColor": "#ffffff",
                                            "cornerRadius": "4px",
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "paddingAll": "0px",
                                            "spacing": "none",
                                            "margin": "none",
                                            "borderWidth": "1px",
                                            "backgroundColor": "#133a13cc"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                    "type": "spacer",
                                                    "size": "xl"
                                                },
                                                {
                                                    "type": "text",
                                                    "text": "สงวนลิขสิทธิ์ พ.ศ.2560 FS-EXCHANGER",
                                                    "size": "xxs",
                                                    "color": "#e6e6e6",
                                                    "align": "center",
                                                    "gravity": "center",
                                                    "weight": "regular",
                                                    "style": "italic"
                                                }
                                            ],
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetBottom": "0px",
                                            "spacing": "none",
                                            "margin": "none"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "xxl"
                                }
                            ],
                            "position": "absolute",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "backgroundColor": "#267326aa",
                            "paddingAll": "12px",
                            "offsetTop": "0px",
                            "paddingTop": "16px"
                        }
                    ],
                    "paddingAll": "0px"
                }
            }
        ]
    }
}]';

const SKRILL = '[{
    "type": "flex",
    "altText": "skrill",
    "contents": {
        "type": "carousel",
        "contents": [{
                "type": "bubble",
                "body": {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [{
                            "type": "image",
                            "url": "https://fsexchanger.files.wordpress.com/2020/04/unnamed-2.jpg",
                            "size": "full",
                            "aspectMode": "cover",
                            "gravity": "center",
                            "aspectRatio": "2:3",
                            "align": "center"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [{
                                "type": "image",
                                "url": "https://fsexchanger998477843.files.wordpress.com/2020/05/bg00133-e1588704618700.png",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "2:3",
                                "offsetTop": "0px",
                                "offsetStart": "0px",
                                "offsetBottom": "0px",
                                "offsetEnd": "0px",
                                "gravity": "center",
                                "align": "center"
                            }],
                            "offsetTop": "0px",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "position": "absolute"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [{
                                    "type": "spacer",
                                    "size": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                        "type": "image",
                                        "url": "https://www.casinorunner.com/wp-content/uploads/2018/06/skrill_logo.png",
                                        "size": "sm",
                                        "align": "center",
                                        "gravity": "center",
                                        "aspectRatio": "3:1",
                                        "aspectMode": "cover"
                                    }],
                                    "offsetTop": "0px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [{
                                                "type": "text",
                                                "text": "ราคาที่รับซื้อ",
                                                "size": "md",
                                                "color": "#e6e6e6",
                                                "weight": "bold",
                                                "align": "center"
                                            },
                                            {
                                                "type": "spacer",
                                                "size": "md"
                                            }
                                        ]
                                    }],
                                    "spacing": "sm",
                                    "margin": "lg"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ดอลลาร์สหรัฐฯ",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ไทยบาท",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$100 - $500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 25.00",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px",
                                            "width": "40%"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$501 - $1,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 25.50",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,001 - $1,500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 26.00",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,501 - $2,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 26.50",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$2,001 - $10,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 27.50",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "button",
                                                "action": {
                                                    "type": "uri",
                                                    "label": "แจ้งโอนขายเหรียญ",
                                                    "uri": "line://app/1654168555-vKg3wqZZ",
                                                    "altUri": {
                                                        "desktop": "https://liff.line.me/1654168555-vKg3wqZZ"
                                                    }
                                                },
                                                "offsetTop": "0px",
                                                "offsetBottom": "0px",
                                                "offsetStart": "0px",
                                                "offsetEnd": "0px",
                                                "gravity": "center",
                                                "style": "link",
                                                "height": "sm",
                                                "margin": "none",
                                                "color": "#ffffff"
                                            }],
                                            "borderColor": "#ffffff",
                                            "cornerRadius": "4px",
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "paddingAll": "0px",
                                            "spacing": "none",
                                            "margin": "none",
                                            "borderWidth": "1px",
                                            "backgroundColor": "#4d004dcc"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                    "type": "spacer",
                                                    "size": "xl"
                                                },
                                                {
                                                    "type": "text",
                                                    "text": "สงวนลิขสิทธิ์ พ.ศ.2560 FS-EXCHANGER",
                                                    "size": "xxs",
                                                    "color": "#e6e6e6",
                                                    "align": "center",
                                                    "gravity": "center",
                                                    "weight": "regular",
                                                    "style": "italic"
                                                }
                                            ],
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetBottom": "0px",
                                            "spacing": "none",
                                            "margin": "none"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "xxl"
                                }
                            ],
                            "position": "absolute",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "backgroundColor": "#4d004d77",
                            "paddingAll": "12px",
                            "offsetTop": "0px",
                            "paddingTop": "16px"
                        }
                    ],
                    "paddingAll": "0px"
                }
            },
            {
                "type": "bubble",
                "body": {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [{
                            "type": "image",
                            "url": "https://fsexchanger.files.wordpress.com/2015/08/free-money-course-white.gif",
                            "size": "full",
                            "aspectMode": "cover",
                            "gravity": "top",
                            "aspectRatio": "2:3"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [{
                                "type": "image",
                                "url": "https://fsexchanger998477843.files.wordpress.com/2020/05/bg00133-e1588704618700.png",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "2:3",
                                "offsetTop": "0px",
                                "offsetStart": "0px",
                                "offsetBottom": "0px",
                                "offsetEnd": "0px",
                                "gravity": "top"
                            }],
                            "offsetTop": "0px",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "position": "absolute"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [{
                                    "type": "spacer",
                                    "size": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                        "type": "image",
                                        "url": "https://www.casinorunner.com/wp-content/uploads/2018/06/skrill_logo.png",
                                        "size": "sm",
                                        "align": "center",
                                        "gravity": "center",
                                        "aspectRatio": "3:1",
                                        "aspectMode": "cover"
                                    }],
                                    "offsetTop": "0px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [{
                                                "type": "text",
                                                "text": "ราคาขาย",
                                                "size": "md",
                                                "color": "#e6e6e6",
                                                "weight": "bold",
                                                "align": "center"
                                            },
                                            {
                                                "type": "spacer",
                                                "size": "md"
                                            }
                                        ]
                                    }],
                                    "margin": "lg"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ดอลลาร์สหรัฐฯ",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "ไทยบาท",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$100 - $500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 35.00",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px",
                                            "width": "40%"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$501 - $1,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 34.50",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px",
                                            "width": "40%"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,001 - $1,500",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 34.25",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px",
                                            "width": "40%"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$1,501 - $2,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 34.00",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px",
                                            "width": "40%"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "$2,001 - $10,000",
                                                "size": "md",
                                                "color": "#ffffff",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "60%",
                                            "borderColor": "#4d004d",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#4d004dcc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "text",
                                                "text": "฿ 33.50",
                                                "size": "md",
                                                "color": "#4d004d",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#4d004dcc",
                                            "cornerRadius": "4px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px",
                                            "width": "40%"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "sm",
                                    "paddingEnd": "1px"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [{
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                "type": "button",
                                                "action": {
                                                    "type": "uri",
                                                    "label": "แจ้งโอนซื้อเหรียญ",
                                                    "uri": "line://app/1654168555-O4AV6YRR",
                                                    "altUri": {
                                                        "desktop": "https://liff.line.me/1654168555-O4AV6YRR"
                                                    }
                                                },
                                                "offsetTop": "0px",
                                                "offsetBottom": "0px",
                                                "offsetStart": "0px",
                                                "offsetEnd": "0px",
                                                "gravity": "center",
                                                "style": "link",
                                                "height": "sm",
                                                "margin": "none",
                                                "color": "#ffffff"
                                            }],
                                            "borderColor": "#ffffff",
                                            "cornerRadius": "4px",
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "paddingAll": "0px",
                                            "spacing": "none",
                                            "margin": "none",
                                            "borderWidth": "1px",
                                            "backgroundColor": "#4d004dcc"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [{
                                                    "type": "spacer",
                                                    "size": "xl"
                                                },
                                                {
                                                    "type": "text",
                                                    "text": "สงวนลิขสิทธิ์ พ.ศ.2560 FS-EXCHANGER",
                                                    "size": "xxs",
                                                    "color": "#e6e6e6",
                                                    "align": "center",
                                                    "gravity": "center",
                                                    "weight": "regular",
                                                    "style": "italic"
                                                }
                                            ],
                                            "offsetEnd": "0px",
                                            "offsetStart": "0px",
                                            "offsetBottom": "0px",
                                            "spacing": "none",
                                            "margin": "none"
                                        }
                                    ],
                                    "spacing": "xs",
                                    "margin": "xxl"
                                }
                            ],
                            "position": "absolute",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "backgroundColor": "#4d004daa",
                            "paddingAll": "12px",
                            "offsetTop": "0px",
                            "paddingTop": "16px"
                        }
                    ],
                    "paddingAll": "0px"
                }
            }
        ]
    }
}]';