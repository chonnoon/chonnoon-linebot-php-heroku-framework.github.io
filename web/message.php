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

 const GREETING_MESSAGE = '[{
        "type": "flex",
        "altText": "greeting",
        "contents: {
            "type": "carousel",
            "contents": [
                {
                    "type": "bubble",
                    "size": "mega",
                    "body": {
                        "type": "box",
                        "layout": "vertical",
                        "contents": [
                            {
                                "type": "image",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "1:1",
                                "gravity": "center",
                                "url": "https://fsexchanger.files.wordpress.com/2020/04/tomswallpapers.com-110033.jpg"
                            },
                            {
                                "type": "box",
                                "layout": "horizontal",
                                "contents": [
                                    {
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "text",
                                                        "text": "ดูอัตราแลกเปลี่ยน",
                                                        "size": "xl",
                                                        "color": "#ffffff"
                                                    }
                                                ]
                                            },
                                            {
                                                "type": "box",
                                                "layout": "baseline",
                                                "contents": [
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                    },
                                                    {
                                                        "type": "text",
                                                        "text": "4.0",
                                                        "color": "#a9a9a9"
                                                    }
                                                ],
                                                "spacing": "xs"
                                            },
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "box",
                                                        "layout": "baseline",
                                                        "contents": [
                                                            {
                                                                "type": "text",
                                                                "text": "โปรดตรวจเช็คราคาก่อนซื้อ-ขายทุกครั้ง",
                                                                "color": "#e6e6e6",
                                                                "size": "md",
                                                                "flex": 0,
                                                                "align": "end"
                                                            }
                                                        ],
                                                        "flex": 0,
                                                        "spacing": "lg"
                                                    }
                                                ]
                                            }
                                        ],
                                        "spacing": "xs"
                                    }
                                ],
                                "position": "absolute",
                                "offsetBottom": "0px",
                                "offsetStart": "0px",
                                "offsetEnd": "0px",
                                "paddingAll": "20px",
                                "backgroundColor": "#03303Acc"
                            }
                        ],
                        "paddingAll": "0px",
                        "action": {
                            "type": "postback",
                            "label": "currency",
                            "data": "currency",
                            "displayText": "currency"
                        }
                    }
                },
                {
                    "type": "bubble",
                    "size": "mega",
                    "body": {
                        "type": "box",
                        "layout": "vertical",
                        "contents": [
                            {
                                "type": "image",
                                "url": "https://fsexchanger.files.wordpress.com/2020/04/tomswallpapers.com-88183.jpg",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "1:1",
                                "gravity": "center"
                            },
                            {
                                "type": "box",
                                "layout": "horizontal",
                                "contents": [
                                    {
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "text",
                                                        "text": "ดูวิธีซื้อ-ขาย ดูกฏระเบียบ",
                                                        "size": "xl",
                                                        "color": "#ffffff"
                                                    }
                                                ]
                                            },
                                            {
                                                "type": "box",
                                                "layout": "baseline",
                                                "contents": [
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                    },
                                                    {
                                                        "type": "text",
                                                        "text": "4.0",
                                                        "color": "#a9a9a9"
                                                    }
                                                ],
                                                "spacing": "xs"
                                            },
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "box",
                                                        "layout": "baseline",
                                                        "contents": [
                                                            {
                                                                "type": "text",
                                                                "text": "ดูขั้นตอนซื้อขาย ข้อตกลงการใช้บริการ",
                                                                "color": "#ffffff",
                                                                "size": "md",
                                                                "flex": 0,
                                                                "align": "end",
                                                                "action": {
                                                                    "type": "uri",
                                                                    "label": "guide",
                                                                    "uri": "line://app/1654168555-z90KwaXX",
                                                                    "altUri": {
                                                                        "desktop": "https://liff.line.me/1654168555-z90KwaXX"
                                                                    }
                                                                }
                                                            }
                                                        ],
                                                        "flex": 0,
                                                        "spacing": "lg"
                                                    }
                                                ]
                                            }
                                        ],
                                        "spacing": "xs"
                                    }
                                ],
                                "position": "absolute",
                                "offsetBottom": "0px",
                                "offsetStart": "0px",
                                "offsetEnd": "0px",
                                "paddingAll": "20px",
                                "backgroundColor": "#006699cc"
                            }
                        ],
                        "paddingAll": "0px"
                    }
                },
                {
                    "type": "bubble",
                    "size": "mega",
                    "body": {
                        "type": "box",
                        "layout": "vertical",
                        "contents": [
                            {
                                "type": "image",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "1:1",
                                "gravity": "center",
                                "url": "https://fsexchanger.files.wordpress.com/2020/04/tomswallpapers.com-109478.jpg"
                            },
                            {
                                "type": "box",
                                "layout": "horizontal",
                                "contents": [
                                    {
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "text",
                                                        "text": "แจ้งโอนขาย แจ้งโอนซื้อ",
                                                        "size": "xl",
                                                        "color": "#ffffff"
                                                    }
                                                ]
                                            },
                                            {
                                                "type": "box",
                                                "layout": "baseline",
                                                "contents": [
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                    },
                                                    {
                                                        "type": "text",
                                                        "text": "4.0",
                                                        "color": "#a9a9a9"
                                                    }
                                                ],
                                                "spacing": "xs"
                                            },
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "box",
                                                        "layout": "baseline",
                                                        "contents": [
                                                            {
                                                                "type": "text",
                                                                "text": "ขายเหรียญ ซื้อเหรียญ",
                                                                "color": "#e6e6e6",
                                                                "size": "md",
                                                                "flex": 0,
                                                                "align": "end"
                                                            }
                                                        ],
                                                        "flex": 0,
                                                        "spacing": "lg"
                                                    }
                                                ]
                                            }
                                        ],
                                        "spacing": "xs"
                                    }
                                ],
                                "position": "absolute",
                                "offsetBottom": "0px",
                                "offsetStart": "0px",
                                "offsetEnd": "0px",
                                "paddingAll": "20px",
                                "backgroundColor": "#996633cc"
                            }
                        ],
                        "paddingAll": "0px",
                        "action": {
                            "type": "uri",
                            "label": "buy or sell",
                            "uri": "line://app/1654168555-vKg3wqZZ"
                        }
                    }
                },
                {
                    "type": "bubble",
                    "size": "mega",
                    "body": {
                        "type": "box",
                        "layout": "vertical",
                        "contents": [
                            {
                                "type": "image",
                                "url": "https://fsexchanger.files.wordpress.com/2020/04/tomswallpapers.com-101066.jpg",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "1:1",
                                "gravity": "center"
                            },
                            {
                                "type": "box",
                                "layout": "horizontal",
                                "contents": [
                                    {
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "text",
                                                        "text": "ศูนย์สมาชิก ติดตามซื้อ-ขาย",
                                                        "size": "xl",
                                                        "color": "#ffffff"
                                                    }
                                                ]
                                            },
                                            {
                                                "type": "box",
                                                "layout": "baseline",
                                                "contents": [
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                    },
                                                    {
                                                        "type": "text",
                                                        "text": "4.0",
                                                        "color": "#a9a9a9"
                                                    }
                                                ],
                                                "spacing": "xs"
                                            },
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "box",
                                                        "layout": "baseline",
                                                        "contents": [
                                                            {
                                                                "type": "text",
                                                                "text": "ติดตามสถานะการซื้อขาย ข้อมูลธนาคาร",
                                                                "color": "#e6e6e6",
                                                                "size": "md",
                                                                "flex": 0,
                                                                "align": "end"
                                                            }
                                                        ],
                                                        "flex": 0,
                                                        "spacing": "lg"
                                                    }
                                                ]
                                            }
                                        ],
                                        "spacing": "xs"
                                    }
                                ],
                                "position": "absolute",
                                "offsetBottom": "0px",
                                "offsetStart": "0px",
                                "offsetEnd": "0px",
                                "paddingAll": "20px",
                                "backgroundColor": "#005580cc"
                            }
                        ],
                        "paddingAll": "0px",
                        "action": {
                            "type": "uri",
                            "label": "member",
                            "uri": "line://app/1654168555-w3326mkk",
                            "altUri": {
                                "desktop": "https://liff.line.me/1654168555-w3326mkk"
                            }
                        }
                    }
                },
                {
                    "type": "bubble",
                    "size": "mega",
                    "body": {
                        "type": "box",
                        "layout": "vertical",
                        "contents": [
                            {
                                "type": "image",
                                "url": "https://fsexchanger.files.wordpress.com/2020/04/tomswallpapers.com-18595.jpg",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "1:1",
                                "gravity": "center"
                            },
                            {
                                "type": "box",
                                "layout": "horizontal",
                                "contents": [
                                    {
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "text",
                                                        "text": "สมัครสมาชิก ยินยันตัวตน",
                                                        "size": "xl",
                                                        "color": "#ffffff"
                                                    }
                                                ]
                                            },
                                            {
                                                "type": "box",
                                                "layout": "baseline",
                                                "contents": [
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                    },
                                                    {
                                                        "type": "text",
                                                        "text": "4.0",
                                                        "color": "#a9a9a9"
                                                    }
                                                ],
                                                "spacing": "xs"
                                            },
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "box",
                                                        "layout": "baseline",
                                                        "contents": [
                                                            {
                                                                "type": "text",
                                                                "text": "สมัครสมาชิก ส่งหลักฐานยืนยันตัาตน",
                                                                "color": "#e6e6e6",
                                                                "size": "md",
                                                                "flex": 0,
                                                                "align": "end"
                                                            }
                                                        ],
                                                        "flex": 0,
                                                        "spacing": "lg"
                                                    }
                                                ]
                                            }
                                        ],
                                        "spacing": "xs"
                                    }
                                ],
                                "position": "absolute",
                                "offsetBottom": "0px",
                                "offsetStart": "0px",
                                "offsetEnd": "0px",
                                "paddingAll": "20px",
                                "backgroundColor": "#001a1acc"
                            }
                        ],
                        "paddingAll": "0px",
                        "action": {
                            "type": "uri",
                            "label": "register or verify",
                            "uri": "line://app/1654168555-M0qDQvgg"
                        }
                    }
                },
                {
                    "type": "bubble",
                    "size": "mega",
                    "body": {
                        "type": "box",
                        "layout": "vertical",
                        "contents": [
                            {
                                "type": "image",
                                "url": "https://fsexchanger.files.wordpress.com/2020/04/r003.jpg",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "1:1",
                                "gravity": "center"
                            },
                            {
                                "type": "box",
                                "layout": "horizontal",
                                "contents": [
                                    {
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "text",
                                                        "text": "ติดต่อ สอบถาม",
                                                        "size": "xl",
                                                        "color": "#ffffff",
                                                        "align": "center"
                                                    }
                                                ]
                                            },
                                            {
                                                "type": "box",
                                                "layout": "baseline",
                                                "contents": [
                                                    {
                                                        "type": "text",
                                                        "text": "ไลน์ ไอดี: @136mjagl (มี @ ด้วย)",
                                                        "color": "#ffff00",
                                                        "align": "center"
                                                    }
                                                ],
                                                "spacing": "xs"
                                            },
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "box",
                                                        "layout": "baseline",
                                                        "contents": [
                                                            {
                                                                "type": "text",
                                                                "text": "เปิดตลอด 24 ชั่วโมง  โทร.0865001236",
                                                                "color": "#e6e6e6",
                                                                "size": "md",
                                                                "flex": 0,
                                                                "align": "end"
                                                            }
                                                        ],
                                                        "flex": 0,
                                                        "spacing": "lg"
                                                    }
                                                ]
                                            }
                                        ],
                                        "spacing": "xs"
                                    }
                                ],
                                "position": "absolute",
                                "offsetBottom": "0px",
                                "offsetStart": "0px",
                                "offsetEnd": "0px",
                                "paddingAll": "20px",
                                "backgroundColor": "#006680cc"
                            }
                        ],
                        "paddingAll": "0px",
                        "action": {
                            "type": "uri",
                            "label": "contact us",
                            "uri": "https://lin.ee/g5vsfzJ"
                        }
                    }
                },
                {
                    "type": "bubble",
                    "size": "mega",
                    "body": {
                        "type": "box",
                        "layout": "vertical",
                        "contents": [
                            {
                                "type": "image",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "1:1",
                                "gravity": "center",
                                "url": "https://fsexchanger.files.wordpress.com/2020/04/l2-2500x16862-1.jpg"
                            },
                            {
                                "type": "image",
                                "url": "https://fsexchanger.files.wordpress.com/2020/05/bg0000-11.png",
                                "position": "absolute",
                                "aspectRatio": "1:1",
                                "size": "full",
                                "aspectMode": "cover"
                            },
                            {
                                "type": "box",
                                "layout": "horizontal",
                                "contents": [
                                    {
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "text",
                                                        "text": "เครื่องคำณวน เครื่องคิดเลข",
                                                        "size": "xl",
                                                        "color": "#ffffff"
                                                    }
                                                ]
                                            },
                                            {
                                                "type": "box",
                                                "layout": "baseline",
                                                "contents": [
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                    },
                                                    {
                                                        "type": "icon",
                                                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                    },
                                                    {
                                                        "type": "text",
                                                        "text": "4.0",
                                                        "color": "#a9a9a9"
                                                    }
                                                ],
                                                "spacing": "xs"
                                            },
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "box",
                                                        "layout": "baseline",
                                                        "contents": [
                                                            {
                                                                "type": "text",
                                                                "text": "คำณวนอัตราแลกเปลี่ยนและค่าทำเนียม",
                                                                "color": "#e6e6e6",
                                                                "size": "md",
                                                                "flex": 0,
                                                                "align": "end"
                                                            }
                                                        ],
                                                        "flex": 0,
                                                        "spacing": "lg"
                                                    }
                                                ]
                                            }
                                        ],
                                        "spacing": "xs"
                                    }
                                ],
                                "position": "absolute",
                                "offsetBottom": "0px",
                                "offsetStart": "0px",
                                "offsetEnd": "0px",
                                "paddingAll": "20px",
                                "backgroundColor": "#03303Acc"
                            }
                        ],
                        "paddingAll": "0px",
                        "action": {
                            "type": "uri",
                            "label": "coculaters",
                            "url": "line://app/1654168555-joA0w577",
                            "altUri": {
                                "desktop": "https://liff.line.me/1654168555-joA0w577"
                            }
                        }
                    }
                },
                {
                    "type": "bubble",
                    "size": "mega",
                    "body": {
                        "type": "box",
                        "layout": "vertical",
                        "contents": [
                            {
                                "type": "image",
                                "size": "full",
                                "aspectMode": "cover",
                                "aspectRatio": "1:1",
                                "gravity": "top",
                                "url": "https://fsexchanger998477843.files.wordpress.com/2020/01/cropped-mylogo640x640-4.jpg"
                            },
                            {
                                "type": "box",
                                "layout": "horizontal",
                                "contents": [
                                    {
                                        "type": "box",
                                        "layout": "vertical",
                                        "contents": [
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "text",
                                                        "text": "เข้าสู่เว็บไซต์",
                                                        "size": "xl",
                                                        "color": "#ffffff",
                                                        "align": "center",
                                                        "weight": "regular"
                                                    }
                                                ],
                                                "offsetTop": "132px"
                                            },
                                            {
                                                "type": "box",
                                                "layout": "horizontal",
                                                "contents": [
                                                    {
                                                        "type": "box",
                                                        "layout": "vertical",
                                                        "contents": [
                                                            {
                                                                "type": "text",
                                                                "text": "www.fs-exchanger.com",
                                                                "color": "#e6e6e6",
                                                                "size": "md",
                                                                "align": "center"
                                                            }
                                                        ],
                                                        "spacing": "lg",
                                                        "offsetBottom": "0px"
                                                    }
                                                ],
                                                "offsetBottom": "-212px"
                                            }
                                        ],
                                        "spacing": "xs"
                                    }
                                ],
                                "position": "absolute",
                                "offsetBottom": "0px",
                                "offsetStart": "0px",
                                "offsetEnd": "0px",
                                "paddingAll": "20px",
                                "offsetTop": "0px"
                            }
                        ],
                        "paddingAll": "0px",
                        "action": {
                            "type": "uri",
                            "label": "open url",
                            "uri": "line://app/1654168555-kVyx8BAA"
                        }
                    }
                }
            ]
        }
    }]';

const PAYPAL = '[{
    "type": "flex",
    "altText": "paypal",
    "contents": {
        "type": "carousel",
        "contents": [{
                "type": "bubble",
                "body": {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [{
                            "type": "image",
                            "url": "https://fsexchanger.files.wordpress.com/2020/04/unnamed-11.jpg",
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
                                "url": "https://fsexchanger998477843.files.wordpress.com/2020/05/bg00111-e1588698155481.png",
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
                                        "url": "https://pngimg.com/uploads/paypal/paypal_PNG24.png",
                                        "size": "md",
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
                                            "borderColor": "#03303A",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#03303A",
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
                                            "borderColor": "#03303A",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#03303A",
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
                                            "borderColor": "#03303A",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#03303A",
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
                                            "borderColor": "#03303A",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#03303A",
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
                                            "borderColor": "#03303A",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#03303A",
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
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#000000",
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
                                            "backgroundColor": "#03303Acc"
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
                            "backgroundColor": "#03303A99",
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
                                        "url": "https://pngimg.com/uploads/paypal/paypal_PNG24.png",
                                        "size": "md",
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
                                            "borderColor": "#03303A",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "bold",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#03303A",
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
                                            "borderColor": "#03303A",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "regular",
                                                "align": "center"
                                            }],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#03303A",
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
                                            "borderColor": "#03303A",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#03303A",
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
                                            "borderColor": "#03303A",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#03303A",
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
                                            "borderColor": "#03303A",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#03303A",
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
                                            "backgroundColor": "#03303Acc",
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
                                                "color": "#03303A",
                                                "weight": "regular",
                                                "align": "center",
                                                "gravity": "center"
                                            }],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#000000",
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
                                            "backgroundColor": "#03303Acc"
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
                            "backgroundColor": "#03303Aaa",
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

const WEB_MONEY = '[{
    "type": "flex",
    "altText": "webmoney",
    "contents": {
        "type": "carousel",
        "contents": [
            {
                "type": "bubble",
                "body": {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [
                        {
                            "type": "image",
                            "url": "https://fsexchanger.files.wordpress.com/2020/04/r201.jpg",
                            "size": "full",
                            "aspectMode": "cover",
                            "gravity": "center",
                            "aspectRatio": "2:3"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [
                                {
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
                                }
                            ],
                            "offsetTop": "0px",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "position": "absolute"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [
                                {
                                    "type": "spacer",
                                    "size": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [
                                        {
                                            "type": "image",
                                            "url": "https://pngimg.com/uploads/webmoney/webmoney_PNG3.png",
                                            "size": "lg",
                                            "align": "center",
                                            "gravity": "center",
                                            "aspectRatio": "4:1",
                                            "aspectMode": "cover"
                                        }
                                    ],
                                    "offsetTop": "0px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "ราคาที่รับซื้อ",
                                                    "size": "md",
                                                    "color": "#006699cc",
                                                    "weight": "bold",
                                                    "align": "center"
                                                },
                                                {
                                                    "type": "spacer",
                                                    "size": "md"
                                                }
                                            ]
                                        }
                                    ],
                                    "spacing": "sm",
                                    "margin": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "ดอลลาร์สหรัฐฯ",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "bold",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "ไทยบาท",
                                                    "size": "md",
                                                    "color": "#006699cc",
                                                    "weight": "bold",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "$100 - $500",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "฿ 25.00",
                                                    "size": "md",
                                                    "color": "#006699",
                                                    "weight": "regular",
                                                    "align": "center"
                                                }
                                            ],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "$501 - $1,000",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "฿ 25.50",
                                                    "size": "md",
                                                    "color": "#006699cc",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "$1,001 - $1,500",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "฿ 26.00",
                                                    "size": "md",
                                                    "color": "#006699",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "$1,501 - $2,000",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "฿ 26.50",
                                                    "size": "md",
                                                    "color": "#006699",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "$2,001 - $10,000",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "฿ 27.50",
                                                    "size": "md",
                                                    "color": "#006699",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
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
                                                }
                                            ],
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
                                            "backgroundColor": "#006699cc"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "spacer",
                                                    "size": "xl"
                                                },
                                                {
                                                    "type": "text",
                                                    "text": "สงวนลิขสิทธิ์ พ.ศ.2560 FS-EXCHANGER",
                                                    "size": "xxs",
                                                    "color": "#006699",
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
            },
            {
                "type": "bubble",
                "body": {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [
                        {
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
                            "contents": [
                                {
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
                                }
                            ],
                            "offsetTop": "0px",
                            "offsetBottom": "0px",
                            "offsetStart": "0px",
                            "offsetEnd": "0px",
                            "position": "absolute"
                        },
                        {
                            "type": "box",
                            "layout": "vertical",
                            "contents": [
                                {
                                    "type": "spacer",
                                    "size": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "vertical",
                                    "contents": [
                                        {
                                            "type": "image",
                                            "url": "https://pngimg.com/uploads/webmoney/webmoney_PNG3.png",
                                            "size": "lg",
                                            "align": "center",
                                            "gravity": "center",
                                            "aspectRatio": "4:1",
                                            "aspectMode": "cover"
                                        }
                                    ],
                                    "offsetTop": "0px"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "ราคาขาย",
                                                    "size": "md",
                                                    "color": "#006699cc",
                                                    "weight": "bold",
                                                    "align": "center"
                                                },
                                                {
                                                    "type": "spacer",
                                                    "size": "md"
                                                }
                                            ]
                                        }
                                    ],
                                    "margin": "md"
                                },
                                {
                                    "type": "box",
                                    "layout": "horizontal",
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "ดอลลาร์สหรัฐฯ",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "bold",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "ไทยบาท",
                                                    "size": "md",
                                                    "color": "#006699",
                                                    "weight": "bold",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "$100 - $500",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "฿ 34.50",
                                                    "size": "md",
                                                    "color": "#006699",
                                                    "weight": "regular",
                                                    "align": "center"
                                                }
                                            ],
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "$501 - $1,000",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "฿ 34.00",
                                                    "size": "md",
                                                    "color": "#006699",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "$1,001 - $1,500",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "฿ 33.75",
                                                    "size": "md",
                                                    "color": "#006699",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "$1,501 - $2,000",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "฿ 33.50",
                                                    "size": "md",
                                                    "color": "#006699",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "$2,001 - $10,000",
                                                    "size": "md",
                                                    "color": "#ffffff",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "60%",
                                            "borderColor": "#006699",
                                            "borderWidth": "1px",
                                            "cornerRadius": "4px",
                                            "backgroundColor": "#006699cc",
                                            "offsetTop": "0px",
                                            "offsetBottom": "0px",
                                            "offsetStart": "0px",
                                            "offsetEnd": "0px",
                                            "paddingAll": "6px"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "text",
                                                    "text": "฿ 33.25",
                                                    "size": "md",
                                                    "color": "#006699",
                                                    "weight": "regular",
                                                    "align": "center",
                                                    "gravity": "center"
                                                }
                                            ],
                                            "width": "40%",
                                            "backgroundColor": "#ffffff",
                                            "borderWidth": "1px",
                                            "borderColor": "#006699cc",
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
                                    "contents": [
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
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
                                                }
                                            ],
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
                                            "backgroundColor": "#006699cc"
                                        },
                                        {
                                            "type": "box",
                                            "layout": "vertical",
                                            "contents": [
                                                {
                                                    "type": "spacer",
                                                    "size": "xl"
                                                },
                                                {
                                                    "type": "text",
                                                    "text": "สงวนลิขสิทธิ์ พ.ศ.2560 FS-EXCHANGER",
                                                    "size": "xxs",
                                                    "color": "#006699",
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