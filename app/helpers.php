<?php

/**
 * 返回 JSON 数据
 *
 * @param int $code 状态
 * @param string $message 提示
 * @param array|\Illuminate\Database\Eloquent\Collection|\Illuminate\Contracts\Pagination\LengthAwarePaginator $data 数据
 *
 * @return \Illuminate\Http\JsonResponse
 */
function jsonResponse($data, $code = 0, $message = '')
{
    return response()->json([
        'message' => $message,
        'code' => (int)$code,
        'data' => $data
    ], 200);
}
